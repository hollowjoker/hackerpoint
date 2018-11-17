<?php

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('stores')->truncate();

        $file_handle = fopen(__DIR__.'/csv/StoreData.csv','r');

        while(!feof($file_handle)) {
            $array[] = fgetcsv($file_handle, 1024);
        };
        fclose($file_handle);

        foreach($array as $key => $arr) {

            if($key != 0 && $arr != false) {

                $admin = new Store();
                $admin->store_name = $arr[0];
                $admin->user_id = $arr[1];
                $admin->description = $arr[2];

                $admin->save();
            }

        }
    }
}
