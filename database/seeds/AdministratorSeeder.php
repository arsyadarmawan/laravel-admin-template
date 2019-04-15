<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = "admin";
        $admin->email = "admin@me.com";
        $admin->password = \Hash::make("admin123");
        $admin->save();
        $this->command->info("User succesfully added");

    }
}
