<?php

namespace Database\Seeders;

use App\Models\Purchase;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Purchase::factory()->create([
            'owner' => User::first(),
            'purchase_name' => 'Sample Purchase',
            'installment_purchase' => true,
            'installments' => 6,
            'cost' => 15000,
        ]);
    }
}
