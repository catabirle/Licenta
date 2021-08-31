<?php

use App\\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    public function run()
    {
        $contacts = [
            [
                
                'id'=>2,
                'id_user'=>2, 
                'name'=>'Catalin', 
                'email'=>'catabarle98@gmail.com', 
                'phone'=>0722554488, 
                'series'=>'WVWZZZ1HZWK211320', 
                'message'=>'baie de ulei',
            ],
            
        ];

        Role::insert($roles);
    }
}
