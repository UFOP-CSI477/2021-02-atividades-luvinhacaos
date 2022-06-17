<?php

namespace Database\Seeders;

use App\Models\Coleta;
use App\Models\Entidade;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $itensAmount = 7;
        $itens = Item::factory($itensAmount)->create();

        Entidade::factory(5)
            ->create()
            ->each(function ($entity) use ($itens, $itensAmount) {
                Coleta::factory(5)
                    ->create([
                        'entidade_id' => $entity,
                        'item_id' => $itens[rand(0, $itensAmount - 1)]->id
                    ]);
            });
    }
}
