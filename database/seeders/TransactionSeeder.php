<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Type;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = ['Mega', 'Cora', 'Uber', 'Carturesti'];
        $values = [20, 40, 72, 73.5, 39];
        DB::table('transactions')->insert([
            'value' => $values[rand(0,sizeof($values) - 1 )],
            'destination' => $stores[rand(0,sizeof($stores) - 1)],
            'type' => 1,
            'month' => 12,
            'owner' => rand(1,3)
        ]);
        DB::table('transactions')->insert([
            'value' => $values[rand(0,sizeof($values) - 1)],
            'destination' => $stores[rand(0,sizeof($stores))],
            'type' => 1,
            'month' => 12,
            'owner' => rand(1,3)
        ]);
        DB::table('transactions')->insert([
            'value' => $values[rand(0,sizeof($values) - 1)],
            'destination' => $stores[rand(0,sizeof($stores) - 1)],
            'type' => 1,
            'month' => 11,
            'owner' => rand(1,3)
        ]);
        DB::table('transactions')->insert([
            'value' => $values[rand(0,sizeof($values) - 1)],
            'destination' => $stores[rand(0,sizeof($stores) - 1)],
            'type' => 1,
            'month' => 12,
            'owner' => rand(1,3)
        ]);
        DB::table('transactions')->insert([
            'value' => 5600,
            'destination' => 'salariu',
            'type' => 0,
            'month' => 12,
            'owner' => rand(1,3)
        ]);
    }
}
