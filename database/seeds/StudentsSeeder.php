<?php

use App\Groups;
use App\Students;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$count = 50;
for($i=0; $i < $count; $i++){
    factory(Students::class)->create(
        ['group_id'=>$this->random_group()]
    );
}
    }
    public function random_group()
    {
        $groups = Groups::all();
        return $groups->random()->id;
    }
}
