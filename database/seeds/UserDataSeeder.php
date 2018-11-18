<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('users')->truncate();

        $file_handle = fopen(__DIR__.'/csv/UserData.csv','r');

        while(!feof($file_handle)) {
            $array[] = fgetcsv($file_handle, 1024);
        };
        fclose($file_handle);

        foreach($array as $key => $arr) {

            if($key != 0 && $arr != false) {

                $admin = new User();
                $admin->email = $arr[0];
                $admin->password = bcrypt($arr[1]);
                $admin->role = $arr[2];
                $admin->email_verified_at = NULL;

                $admin->save();
            }

        }
    }
}
