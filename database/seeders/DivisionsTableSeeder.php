<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            ['nama_divisi' => 'Mobile Apps'],
            ['nama_divisi' => 'QA'],
            ['nama_divisi' => 'Full Stack'],
            ['nama_divisi' => 'Backend'],
            ['nama_divisi' => 'Frontend'],
            ['nama_divisi' => 'UI/UX Designer'],
        ];

        DB::table('divisions')->insert($divisions);
    }
}
