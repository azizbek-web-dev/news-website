<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Admin Dashboard
     */
    public function dashboard()
    {
        $stats = [
            'users' => User::count(),
            'posts' => Post::count(),
            'categories' => Category::count(),
            'comments' => Comment::count(),
        ];

        $recentPosts = Post::with(['user', 'category'])->latest()->take(5)->get();
        $recentComments = Comment::with(['user', 'post'])->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentPosts', 'recentComments'));
    }

    /**
     * Users Management
     */
    public function users()
    {
        $users = User::withCount(['posts', 'comments'])->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($request->only(['name', 'email']));

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user)
    {
        if ($user->id === 1) {
            return redirect()->route('admin.users')->with('error', 'Cannot delete the admin user.');
        }

        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

    /**
     * Posts Management
     */
    public function posts()
    {
        $posts = Post::with(['user', 'category'])->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function editPost(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function updatePost(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $post->update($request->only(['title', 'content', 'category_id']));

        return redirect()->route('admin.posts')->with('success', 'Post updated successfully.');
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts')->with('success', 'Post deleted successfully.');
    }

    /**
     * Categories Management
     */
    public function categories()
    {
        $categories = Category::withCount('posts')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.categories.create');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name)
        ]);

        return redirect()->route('admin.categories')->with('success', 'Category created successfully.');
    }

    public function editCategory(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function updateCategory(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name)
        ]);

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');
    }

    public function deleteCategory(Category $category)
    {
        if ($category->posts()->count() > 0) {
            return redirect()->route('admin.categories')->with('error', 'Cannot delete category with posts.');
        }

        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully.');
    }

    /**
     * Comments Management
     */
    public function comments()
    {
        $comments = Comment::with(['user', 'post'])->latest()->paginate(10);
        return view('admin.comments.index', compact('comments'));
    }

    public function deleteComment(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.comments')->with('success', 'Comment deleted successfully.');
    }
}
