<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('livres')->insert([
            [
                'titre' => 'Livre 1',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 100,
                'auteur_id' => 1

            ],
            [
                'titre' => 'Livre 2',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 200,
                'auteur_id' => 2
            ],
            [
                'titre' => 'Livre 3',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 300,
                'auteur_id' => 3
            ],
            [
                'titre' => 'Livre 4',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 400,
                'auteur_id' => 4
            ],
            [
                'titre' => 'Livre 5',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 500,
                'auteur_id' => 5
            ],
            [
                'titre' => 'Livre 6',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 600,
                'auteur_id' => 6
            ],
            [
                'titre' => 'Livre 7',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 700,
                'auteur_id' => 7
            ],
            [
                'titre' => 'Livre 8',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 800,
                'auteur_id' => 8
            ],
            [
                'titre' => 'Livre 9',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 900,
                'auteur_id' => 9
            ],
            [
                'titre' => 'Livre 10',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1000,
                'auteur_id' => 10
            ],
            [
                'titre' => 'Livre 11',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1100,
                'auteur_id' => 11
            ],
            [
                'titre' => 'Livre 12',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1200,
                'auteur_id' => 12
            ],
            [
                'titre' => 'Livre 13',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1300,
                'auteur_id' => 13
            ],
            [
                'titre' => 'Livre 14',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1400,
                'auteur_id' => 14
            ],
            [
                'titre' => 'Livre 15',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1500,
                'auteur_id' => 15
            ],
            [
                'titre' => 'Livre 16',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1600,
                'auteur_id' => 16
            ],
            [
                'titre' => 'Livre 17',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1700,
                'auteur_id' => 17
            ],
            [
                'titre' => 'Livre 18',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1800,
                'auteur_id' => 18
            ],
            [
                'titre' => 'Livre 19',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 1900,
                'auteur_id' => 19
            ],
            [
                'titre' => 'Livre 20',
                'date_publication' => '2025-03-01',
                'nombre_pages' => 2000,
                'auteur_id' => 20
            ],
        ]);
    }
}
