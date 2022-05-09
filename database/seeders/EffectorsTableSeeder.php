<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Effector;

class EffectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Effector::create(['name'=>"BD-2",'maker'=>"BOSS",'category'=>"OverDrive",'year'=>1996,'month'=>7,'date'=>8,'price'=>9800]);
        Effector::create(['name'=>"OD-1",'maker'=>"BOSS",'category'=>"OverDrive",'year'=>1989,'month'=>1,'date'=>18,'price'=>10800]);
        Effector::create(['name'=>"digidelay",'maker'=>"Digitech",'category'=>"Delay",'year'=>2006,'month'=>11,'date'=>2,'price'=>12800]);
        Effector::create(['name'=>"zoia",'maker'=>"EmpressEffects",'category'=>"MultiEffector",'year'=>2018,'month'=>7,'date'=>6,'price'=>69800]);
        Effector::create(['name'=>"tides",'maker'=>"JHS",'category'=>"tremolo",'year'=>2011,'month'=>6,'date'=>28,'price'=>11900]);
        Effector::create(['name'=>"bluesky",'maker'=>"strymon",'category'=>"Reverb",'year'=>2010,'month'=>2,'date'=>9,'price'=>34800]);
        //
    }
}
