<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('items')->truncate();

        $file_handle = fopen(__DIR__.'/csv/ItemData.csv','r');

        while(!feof($file_handle)) {
            $array[] = fgetcsv($file_handle, 1024);
        };
        fclose($file_handle);

        foreach($array as $key => $arr) {

            if($key != 0 && $arr != false) {

                $admin = new Item();
                $admin->store_id = $arr[0];
                $admin->user_id = $arr[1];
                $admin->item_category_id = $arr[2];
                $admin->item_name = $arr[3];
                $admin->price = $arr[4];
                $admin->qty = $arr[5];
                $admin->description = $arr[6];
                $admin->type = $arr[7];

                $admin->save();
            }

        }
    }
}
