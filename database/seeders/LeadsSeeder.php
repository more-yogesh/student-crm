<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Seeder;

class LeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $key) {
            $lead = new Lead();
            $lead->user_id = rand(1, 3);
            $lead->name = 'Lead-' . $key;
            $lead->mobile = rand(0000000000, 9999999999);
            $lead->email = 'Lead-' . $key . '@gmail.com';
            $lead->dob = date('Y-m-d');
            $lead->status ='pending';
            $lead->save();
        }
    }
}
