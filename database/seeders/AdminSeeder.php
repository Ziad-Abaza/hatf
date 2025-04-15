<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'     => 'ahmed',
            'email'    => 'ahmedmaher0110@gmail.com',
            'phone'    => '01208982815',
            'password' => bcrypt('123456789'),
        ]);
    }
}
