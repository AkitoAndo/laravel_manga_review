<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mangas')->insert([
            [
                'name' => 'test1',
                'author' => '山田a太郎',
                'publisher' => 'a集英社',
                'description' => 'test1',
                'created_at' => '2023/01/01 11:11:11',
                'updated_at' => '2023/02/02 22:22:22'
            ],
            [
                'name' => 'test2',
                'author' => '山田b太郎',
                'publisher' => 'b集英社',
                'description' => 'test2',
                'created_at' => '2023/01/01 11:11:11',
                'updated_at' => '2023/02/02 22:22:22'
            ],
            [
                'name' => 'test3',
                'author' => '山田c太郎',
                'publisher' => 'c集英社',
                'description' => 'test3',
                'created_at' => '2023/01/01 11:11:11',
                'updated_at' => '2023/02/02 22:22:22'
            ],
        ]);
    }
}
