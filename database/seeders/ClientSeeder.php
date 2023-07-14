<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Villarmia',
                'first_name' => 'Ace Joy',
                'middle_name' => 'Mejares',
                'phone_number' => '09096042852',
                'address' => 'Batasan Island, Tubigon, Bohol.',
                'birth_date' => '2000-04-11',
                'email' => 'acejoygwapo123@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Rosalino',
                'middle_name' => 'Tumabang',
                'phone_number' => '09829182012',
                'address' => 'Bacoong, Tubigon BOhol.',
                'birth_date' => '2002-02-12',
                'email' => 'fross0988@gmail.com',
                'initial_deposit' => 18000,
            ],
            [
                'last_name' => 'Mueblas',
                'first_name' => 'Mark Lister.',
                'middle_name' => 'Rizal',
                'phone_number' => '09102581921',
                'address' => 'Tinangnan, Tubigon, Bohol.',
                'birth_date' => '2002-03-13',
                'email' => 'marklistermueblas3@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Mejias',
                'first_name' => 'Francis',
                'middle_name' => 'Magda',
                'phone_number' => '09011292101',
                'address' => 'Inabangga, Bohol.',
                'birth_date' => '1997-04-27',
                'email' => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Dolera',
                'first_name' => 'Prince Charlies',
                'middle_name' => 'Oldenaria',
                'phone_number' => '09541920182',
                'address' => 'Batasan Island, Tubigon, Bohol.',
                'birth_date' => '2001-06-08',
                'email' => 'dprincecharlies@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Lauros',
                'first_name' => 'Mary Joy',
                'middle_name' => 'Joy',
                'phone_number' => '09721924712',
                'address' => 'Skina,Japan.',
                'birth_date' => '1903-09-12',
                'email' => 'kimsecret627@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Dupa',
                'first_name' => 'Kristine',
                'middle_name' => 'Dups',
                'phone_number' => '0998711245',
                'address' => 'Pinayagan Sur, Tubigon, Bohol.',
                'birth_date' => '2002-01-13',
                'email' => 'dupakristine96@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Pepito',
                'first_name' => 'Vienna Rose',
                'middle_name' => 'Dabasol',
                'phone_number' => '09821921021',
                'address' => 'Pinayagan Norte, Tubigon Bohol.',
                'birth_date' => '2000-04-05',
                'email' => 'aquarius.pink27@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Sacedon',
                'first_name' => 'Christian',
                'middle_name' => 'Baki',
                'phone_number' => '09528192012',
                'address' => 'Tinangnan, Tubigon Bohol.',
                'birth_date' => '1998-04-04',
                'email' => 'christiansacedon3@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Gabato',
                'first_name' => 'Prince Keith',
                'middle_name' => 'Mejares',
                'phone_number' => '09021928451',
                'address' => 'Batasan Island, Tubigon Bohol.',
                'birth_date' => '2000-03-16',
                'email' => 'kiethgabato1@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}
