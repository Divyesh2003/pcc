<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Youtube;
class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Youtube::insert(
            array('id' => '1','title' => 'Laxmi Gairay','url' => 'JEQcvyz4sTw?si=C9diD9vOGxch7fgZ','description' => 'Apostille for South Korea','deleted_at' => NULL,'created_at' => '2024-04-30 16:59:58','updated_at' => '2024-05-10 10:17:07'),
            array('id' => '2','title' => 'Balasubramanyam','url' => 'OiEC-kVRvvs','description' => 'UAE Embassy Attestation','deleted_at' => NULL,'created_at' => '2024-04-30 17:00:23','updated_at' => '2024-05-10 10:16:05'),
            array('id' => '3','title' => 'Nehal Dash','url' => 'A5BxzDYTGuk','description' => 'Apostille for Italy','deleted_at' => NULL,'created_at' => '2024-04-30 17:00:34','updated_at' => '2024-05-10 10:30:20'),
            array('id' => '4','title' => 'Abhay Prakash Mishra','url' => 'LyWzL2u1atM?si=WcREaNlAC1pf4q3T','description' => 'Apostille for France','deleted_at' => NULL,'created_at' => '2024-04-30 17:01:00','updated_at' => '2024-05-10 10:18:24'),
            array('id' => '5','title' => 'RD','url' => 'JEQcvyz4sTw?si=C9diD9vOGxch7fgZ','description' => 'RD','deleted_at' => NULL,'created_at' => '2024-04-30 17:01:57','updated_at' => '2024-05-10 10:07:11')
        );
    }
}
