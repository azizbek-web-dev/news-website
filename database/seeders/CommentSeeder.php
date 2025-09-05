<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $users = User::all();

        $comments = [
            'Great article! Thanks for sharing this information.',
            'I completely agree with the points made here.',
            'This is very interesting. I had no idea about this.',
            'Excellent analysis. Looking forward to more content like this.',
            'I have a different perspective on this topic.',
            'Very informative post. Learned something new today.',
            'This is exactly what I was looking for. Thank you!',
            'I disagree with some of the conclusions drawn here.',
            'Fascinating read. The implications are significant.',
            'Well written and thoroughly researched.',
            'This raises some important questions for further discussion.',
            'I appreciate the balanced approach to this complex topic.',
            'This is a game-changer. The impact will be huge.',
            'Interesting perspective. I never thought about it this way.',
            'This is very timely and relevant information.',
            'Great insights! This really helps clarify the situation.',
            'I have some concerns about the methodology used.',
            'This is a must-read for anyone interested in this field.',
            'Excellent work! The research is impressive.',
            'I would love to see more data on this topic.',
            'This is a controversial topic, but you handled it well.',
            'Very thought-provoking article. Well done!',
            'I have mixed feelings about this approach.',
            'This is groundbreaking research. Congratulations!',
            'I need to think about this more before forming an opinion.',
            'This is exactly the kind of content we need more of.',
            'I have some questions about the implementation.',
            'This is a significant development. Thanks for covering it.',
            'I appreciate the practical implications discussed here.',
            'This is a complex issue that deserves careful consideration.'
        ];

        foreach ($posts as $post) {
            // Generate 2-5 random comments per post
            $commentCount = rand(2, 5);
            
            for ($i = 0; $i < $commentCount; $i++) {
                Comment::create([
                    'post_id' => $post->id,
                    'user_id' => $users->random()->id,
                    'content' => $comments[array_rand($comments)],
                    'created_at' => $post->created_at->addHours(rand(1, 72)),
                ]);
            }
        }
    }
}
