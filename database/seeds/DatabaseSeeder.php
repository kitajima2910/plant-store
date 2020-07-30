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
        $this->call(UserSeeder::class); // DONE
        $this->call(CategorySeeder::class); // DONE
        $this->call(TagSeeder::class); // DONE
        $this->call(ProductSeeder::class); // DONE
        $this->call(ProductImageSeeder::class); // DONE
        $this->call(ProductTagSeeder::class); // DONE
        $this->call(MenuSeeder::class); // DONE
        $this->call(SliderSeeder::class); // DONE
        $this->call(SettingSeeder::class); // DONE
    }
}
