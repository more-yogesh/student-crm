<?php

namespace Database\Seeders;

use App\Models\Deal;
use Illuminate\Database\Seeder;

class DealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $key) {
            $deal = new Deal();
            $deal->user_id = rand(1, 3);
            $deal->lead_id = rand(1, 10);
            $deal->amount = rand(11111, 99999);
            $deal->description = 'deal-' . $key;
            $deal->status = 'unpaid';
            $deal->save();
        }
    }
}
