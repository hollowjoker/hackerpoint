<?php

use Illuminate\Database\Seeder;
use App\Models\Item_Category;

class ItemCategorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('item__categories')->truncate();

        $file_handle = fopen(__DIR__.'/csv/ItemCategoryData.csv','r');

        while(!feof($file_handle)) {
            $array[] = fgetcsv($file_handle, 1024);
        };
        fclose($file_handle);

        foreach($array as $key => $arr) {

            if($key != 0 && $arr != false) {

                $admin = new Item_Category();
                $admin->store_id = $arr[0];
                $admin->category_name = $arr[1];
                $admin->description = $arr[2];

                $admin->save();
            }

        }
    }
}
