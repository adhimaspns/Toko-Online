<?php

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
        //! Menjalankan Seeding data ketika migrate:fresh --seed di jalankan  

        //?  Seeding data ke tabel users
        $this->call(UsersTableSeeder::class);
        //? Seeding data ke tabel Product 
        $this->call(ProductsTableSeeder::class);
        //? Seeding data ke tabel images_products
        $this->call(ImagesProductTableSeeder::class);
        //? Seeding data ke tabel transaction
        $this->call(TransactionsSeeder::class); 

    }
}
