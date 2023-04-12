<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str; 
use App\Models\User; 

class UserSeeder extends Seeder
{

    protected $seed_items = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Using Modal
        $users = [
            [
                'name' => Str::random(8),
                'email' => Str::random(9).'@gmail.com',
                'address' => Str::random(8),
                'password' => Hash::make('password'),
                'image_path' => 'admin',
            ],
            [
                'name' => Str::random(8),
                'email' => Str::random(9).'@gmail.com',
                'address' => Str::random(8),
                'password' => Hash::make('password'),
                'image_path' => 'admin',
            ],
            [
                'name' => Str::random(8),
                'email' => Str::random(9).'@gmail.com',
                'address' => Str::random(8),
                'password' => Hash::make('password'),
                'image_path' => 'user',
            ],
            [
                'name' => Str::random(8),
                'email' => Str::random(9).'@gmail.com',
                'address' => Str::random(8),
                'password' => Hash::make('password'),
                'image_path' => 'dwf-loading-icon',
            ],
            [
                'name' => Str::random(8),
                'email' => Str::random(9).'@gmail.com',
                'address' => Str::random(8),
                'password' => Hash::make('password'),
                'image_path' => 'user',
            ],
            [
                'name' => Str::random(8),
                'email' => Str::random(9).'@gmail.com',
                'address' => Str::random(8),
                'password' => Hash::make('password'),
                'image_path' => 'dwf-loading-icon'
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
