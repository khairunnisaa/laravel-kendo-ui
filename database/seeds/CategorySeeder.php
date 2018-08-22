<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();
        $obj = new \App\Models\Category();
        $obj->name = "Fashion";
        $obj->save();
        $obj = new \App\Models\Category();
        $obj->name = "Bags";
        $obj->save();
        $obj = new \App\Models\Category();
        $obj->name = "Shoes";
        $obj->save();
        $obj = new \App\Models\Category();
        $obj->name = "Blouse";
        $obj->save();
    }
}
