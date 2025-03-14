<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpruntSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emprunts')->insert([
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 1

            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 2
            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 3
            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 4
            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 5
            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 6
            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 7
            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 8
            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 9
            ],
            [
                'date_emprunt' => '2025-03-01',
                'date_retour' => '2025-03-01',
                'livre_id' => 10
            ]
            ]);
    }
}
