<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * ['user_id', 'subject', 'message', 'body', 'file_url'];
     */
    public function run(): void
    {
        for($i=1; $i<=50; $i++){
            Application::create([
                'user_id'=>2,
                'subject'=> 'Laravel has wonderful',
                'message'=> 'Laravel has wonderful documentation covering every documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.',
                'file_url'=>null,
            ]);
        }
    }
}
