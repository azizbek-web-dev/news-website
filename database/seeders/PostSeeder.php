<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $categories = Category::all();

        $posts = [
            [
                'title' => 'Breaking: New Political Reform Announced',
                'content' => 'The government has announced a major political reform that will affect millions of citizens. This comprehensive reform package includes changes to voting procedures, campaign finance laws, and transparency measures. The announcement comes after months of consultation with various stakeholders and is expected to be implemented over the next two years.',
                'category' => 'Politics'
            ],
            [
                'title' => 'Olympic Games 2024: Record-Breaking Performances',
                'content' => 'The 2024 Olympic Games have concluded with several record-breaking performances across multiple sports. Athletes from around the world showcased incredible talent and determination, with new world records set in swimming, track and field, and gymnastics. The games were a testament to human achievement and international cooperation.',
                'category' => 'Sport'
            ],
            [
                'title' => 'Revolutionary AI Technology Changes Everything',
                'content' => 'A groundbreaking artificial intelligence system has been developed that promises to revolutionize multiple industries. This new AI technology can process complex data at unprecedented speeds while maintaining accuracy levels never seen before. Tech companies are already racing to integrate this technology into their products and services.',
                'category' => 'Technology'
            ],
            [
                'title' => 'Hollywood Blockbuster Breaks Box Office Records',
                'content' => 'The latest Hollywood blockbuster has shattered box office records worldwide, becoming the highest-grossing film of all time. The movie, featuring an all-star cast and cutting-edge special effects, has captivated audiences across all demographics. Critics are praising both the visual spectacle and the compelling storyline.',
                'category' => 'Entertainment'
            ],
            [
                'title' => 'Election Results: Historic Victory for Progressive Party',
                'content' => 'In a historic election that saw record voter turnout, the Progressive Party has secured a decisive victory. The results represent a significant shift in political landscape, with voters expressing strong support for environmental policies, social justice reforms, and economic equality measures. The new government is expected to implement major policy changes in the coming months.',
                'category' => 'Politics'
            ],
            [
                'title' => 'World Cup Final: Unforgettable Match Ends in Penalties',
                'content' => 'The World Cup final delivered one of the most thrilling matches in football history, ending in a dramatic penalty shootout. Both teams displayed exceptional skill and determination throughout the 120 minutes of play. The victory was celebrated by millions of fans worldwide, marking the end of an incredible tournament.',
                'category' => 'Sport'
            ],
            [
                'title' => 'Quantum Computing Breakthrough Achieved',
                'content' => 'Scientists have achieved a major breakthrough in quantum computing, successfully maintaining quantum coherence for extended periods. This advancement brings us closer to practical quantum computers that could solve complex problems impossible for classical computers. The research has implications for cryptography, drug discovery, and climate modeling.',
                'category' => 'Technology'
            ],
            [
                'title' => 'Music Festival Draws Record Crowds',
                'content' => 'The annual music festival attracted record-breaking crowds this year, with over 100,000 attendees enjoying performances from top artists across multiple genres. The three-day event featured innovative stage designs, immersive experiences, and a diverse lineup that catered to all musical tastes. Organizers are already planning an even bigger event for next year.',
                'category' => 'Entertainment'
            ],
            [
                'title' => 'International Summit Addresses Climate Crisis',
                'content' => 'World leaders gathered for an unprecedented summit focused on addressing the global climate crisis. The summit resulted in historic agreements on carbon reduction targets, renewable energy investments, and international cooperation mechanisms. The commitments made represent the most ambitious climate action plan in history.',
                'category' => 'Politics'
            ],
            [
                'title' => 'Marathon Runner Sets New World Record',
                'content' => 'An elite marathon runner has set a new world record, completing the 26.2-mile distance in an astonishing time. The achievement required months of intensive training, careful nutrition planning, and perfect race day conditions. The new record has inspired runners worldwide and pushed the boundaries of human endurance.',
                'category' => 'Sport'
            ]
        ];

        foreach ($posts as $postData) {
            $category = $categories->where('name', $postData['category'])->first();
            $user = $users->random();

            Post::create([
                'title' => $postData['title'],
                'slug' => Str::slug($postData['title']),
                'content' => $postData['content'],
                'category_id' => $category->id,
                'user_id' => $user->id,
                'created_at' => now()->subDays(rand(1, 30)),
            ]);
        }
    }
}
