<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => '1',
            'title' => 'Dolfje weerwolfje',
            'genre' => 'kinder boek',
            'writer' => 'Muhittin'
        ]);
        DB::table('books')->insert([
            'id' => '2',
            'title' => 'Kippenvel Horrorhuis',
            'genre' => 'Triller',
            'writer' => 'R.L Stine'
        ]);
        DB::table('books')->insert([
            'id' => '3',
            'title' => 'De ontdekking van de hemel.',
            'genre' => 'Zelfontwikkeling',
            'writer' => 'Harry Mulisch'
        ]);
        DB::table('books')->insert([
            'id' => '4',
            'title' => 'spijt',
            'genre' => 'Zelfontwikkeling',
            'writer' => 'carry slee'
        ]);
        
        //
    }
}
