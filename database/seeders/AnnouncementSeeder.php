<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $announcements = Announcement::create([
            'title' => 'sample',
            'shortDescription' =>  'sample',
            'fullDescription' =>  'sample',
            'header' =>  'sample',
            'thumbnailImage' => '1667400641.png',
            'fullImage' => '1667400641.png',  
        ]); 
    }
}
