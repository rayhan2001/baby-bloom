<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $existingAdmin = User::where('email', 'admin@gmail.com')->first();

        if (!$existingAdmin) {
            User::create([
                'username' => 'Super Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => true,
            ]);

            echo "Admin user created successfully!\n";
            echo "Email: admin@gmail.com\n";
            echo "Password: password\n";
        } else {
            echo "Admin user already exists!\n";
            echo "Email: admin@gmail.com\n";
            echo "Password: password\n";
        }
    }
}
