<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('auteurs')->insert([
            [
                'nom' => 'Doe',
                'prenom' => 'John'
            ],
            [
                'nom' => 'Doe',
                'prenom' => 'Jane'
            ],
            [
                'nom' => 'Smith',
                'prenom' => 'Alice'
            ],
            [
                'nom' => 'Smith',
                'prenom' => 'Bob'
            ],
            [
                'nom' => 'Johnson',
                'prenom' => 'Eve'
            ],
            [
                'nom' => 'Johnson',
                'prenom' => 'Carl'
            ],
            [
                'nom' => 'Williams',
                'prenom' => 'Grace'
            ],
            [
                'nom' => 'Williams',
                'prenom' => 'David'
            ],
            [
                'nom' => 'Brown',
                'prenom' => 'Isaac'
            ],
            [
                'nom' => 'Brown',
                'prenom' => 'Sophia'
            ],
            [
                'nom' => 'Jones',
                'prenom' => 'Liam'
            ],
            [
                'nom' => 'Jones',
                'prenom' => 'Olivia'
            ],
            [
                'nom' => 'Garcia',
                'prenom' => 'Noah'
            ],
            [
                'nom' => 'Garcia',
                'prenom' => 'Emma'
            ],
            [
                'nom' => 'Martinez',
                'prenom' => 'Oliver'
            ],
            [
                'nom' => 'Martinez',
                'prenom' => 'Ava'
            ],
            [
                'nom' => 'Hernandez',
                'prenom' => 'Elijah'
            ],
            [
                'nom' => 'Hernandez',
                'prenom' => 'Sophia'
            ],
            [
                'nom' => 'Lopez',
                'prenom' => 'Lucas'
            ],
            [
                'nom' => 'Lopez',
                'prenom' => 'Mia'
            ],
            [
                'nom' => 'Gonzalez',
                'prenom' => 'James'
            ],
            [
                'nom' => 'Gonzalez',
                'prenom' => 'Amelia'
            ],
            [
                'nom' => 'Wilson',
                'prenom' => 'Alexander'
            ],
            [
                'nom' => 'Wilson',
                'prenom' => 'Harper'
            ],
            [
                'nom' => 'Anderson',
                'prenom' => 'Benjamin'
            ],
        ]);
    }
}
