<?php

namespace Database\Seeders;

use App\Models\Feed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $feeds = [
            [
                'name' => 'Blic.rs – Politika',
                'url'  => 'https://www.blic.rs/rss/category-rss?categoryUuid=669c62da-05ee-535a-8e08-27d5977ac2e2',
            ],
            [
                'name' => "Blic.rs - Društvo",
                'url' => "https://www.blic.rs/rss/category-rss?categoryUuid=3773916d-93ac-5e41-ae25-10382d58ddd4"
            ]
   
        ];

        foreach($feeds as $data){
            Feed::firstOrCreate(
                ['url' => $data['url']],
                ['name' => $data['name']]
            );
        }
    }
}
