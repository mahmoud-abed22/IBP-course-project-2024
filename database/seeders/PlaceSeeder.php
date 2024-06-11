<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plases')->truncate();   
        DB::table('users')->truncate(); 

        DB::table('users')->insert([
            'name' => 'Yunus',
            'surname' => 'Emre' ,
            'age' => '18-10-1994' ,
            'phone' => '05358499324' ,
            'state' => '1' ,
            'gender' => 'male' ,
            'email' =>'yunusemre@gmail.com' ,
            'password' => Hash::make('yunusemre'),
        ]);

        DB::table('users')->insert([
            'name' => 'Şafak',
            'surname' => ' ' ,
            'age' => '18-10-1995' ,
            'phone' => '05352580885' ,
            'state' => '2' ,
            'gender' => 'male' ,
            'email' =>'safak@gmail.com' ,
            'password' => Hash::make('safaksafak'),
        ]);

        DB::table('users')->insert([
            'name' => 'Namik',
            'surname' => 'Kemal' ,
            'age' => '18-10-1991' ,
            'phone' => '05358486104' ,
            'state' => '3' ,
            'gender' => 'male' ,
            'email' =>'namikkemal@gmail.com' ,
            'password' => Hash::make('namikkemal'),
        ]);



        DB::table('plases')->insert([
            'name' => 'Yunus Emre',
            'address' => 'Merkez, 100. Yıl Mh., 1065 Sok. No:2, Karabük' ,
            'room_number' => 4 ,
            'email' => 'yunusemre@gmail.com' ,
            'phone' => '05358499324' ,
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1500.463561144784!2d32.671719041962874!3d41.223358612234776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x408354b09264ba17%3A0x681da0d7c22d73af!2sYunus%20Emre%20%C4%B0lkokulu!5e0!3m2!1sar!2str!4v1684064907186!5m2!1sar!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade' ,

            ]);

        DB::table('plases')->insert([
            'name' => 'Şafak',
            'address' => 'Yeşil, 24. Sk. No:7, 78200 Karabük Merkez/Karabük' ,
            'room_number' => 5 ,
            'email' => 'safak@gmail.com' ,
            'phone' => '05352580885' ,
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1500.686223020091!2d32.63230354196293!3d41.213653412534384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409cacafda90cc01%3A0xd77b234040a5405c!2zWWXFn2lsLCAyNC4gU2suIE5vOjcsIDc4MjAwIEthcmFiw7xrIE1lcmtlei9LYXJhYsO8aw!5e0!3m2!1sar!2str!4v1684064693378!5m2!1sar!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade' ,
       
       
            ]);


        DB::table('plases')->insert([
            'name' => 'Namik Kemal',
            'address' => 'Namık Kemal, Şht. Cafer Demirkan Sk. No:2, 78100 Karabük Merkez/Karabük' ,
            'room_number' => 1 ,
            'email' => 'namikkemal@gmail.com' ,
            'phone' => '05358486104' ,
            'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1500.9156941119688!2d32.607511138427604!3d41.20364945406617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409cacc3608e7047%3A0xef4b75e78b447783!2sNam%C4%B1k%20Kemal%20Cami!5e0!3m2!1sar!2str!4v1684065339685!5m2!1sar!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade' ,
        
            ]);


        DB::table('users')->insert([
            'name' => 'beraa',
            'surname' => 'ceze' ,
            'age' => '18-10-2000' ,
            'phone' => '05356723885' ,
            'gender' => 'male' ,
            'state' => '0' ,
            'email' =>'beraaceze@gmail.com' ,
            'password' => Hash::make('beraaceze'),
        ]);
        

    }
}
