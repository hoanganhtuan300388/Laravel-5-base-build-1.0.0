<?php

use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            'email'         => 'info@margincoupon.jp',
            'password'      => bcrypt('Margincoupon@1234'),
            'first_name'    => 'Admin',
            'last_name'     => 'Master',
            'gender'        => GENDER_MALE,
            'rule'          => RULE_MASTER_ADMIN,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ]);
    }
}
