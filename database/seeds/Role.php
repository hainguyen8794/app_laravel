<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            ['name' => 'admin', 'description' => 'Đây là  Admin '],
            ['name' => 'Trưởng làng ', 'description' => 'Đây là trưởng làng'],
            ['name' => 'Làng Viên ', 'description' => 'Đây là  làng viên '],
            ['name'=> 'Lang thang', 'description' => 'Đây là kẻ lang thang']
        ]);
    }
}
