<?php

use App\User;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        $users=array(
            ['name'=>'Mark Ghaye','username'=>'mark','email'=>'mark.ghaye@telenet.be','password'=>Hash::make('geweldig'),
                'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name'=>'Lut Ghaye','username'=>'lut','email'=>'lut.ghaye@telenet.be','password'=>Hash::make('wroeter'),
                'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name'=>'Koen Huybrechts','username'=>'koen','email'=>'koen@appsaloon.be','password'=>Hash::make('appsaloon'),
                'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name'=>'Cindy Penders','username'=>'cindy','email'=>'cindy.penders@hotmail.com','password'=>Hash::make('penders'),
                'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name'=>'Huub Van Kimmenade','username'=>'huub','email'=>'huub.van.kimmenade@kpnmail.nl','password'=>Hash::make('kimmenade'),
                'created_at' => new DateTime, 'updated_at' => new DateTime],

        );
        DB::table('users')->insert($users);
        /*User::create(array(
            'name' => 'Chris Sevilleja',
            'email' => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
        ));*/
    }
} 