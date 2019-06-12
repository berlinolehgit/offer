<?php

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Offer::class,10)->states('flat','panel')->create();
        factory(Offer::class,10)->states('flat','brick')->create();
        factory(Offer::class,10)->states('house','panel')->create();
        factory(Offer::class,10)->states('house','brick')->create();


    }
}
