<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Users::class, 50)->create();
        factory(App\Admin::class, 5)->create();
        factory(App\Debit::class, 50)->create();
        factory(App\Credit::class, 50)->create();
        factory(App\Jan::class, 50)->create();
        factory(App\Feb::class, 50)->create();
        factory(App\Mar::class, 50)->create();
        factory(App\Apr::class, 50)->create();
        factory(App\May::class, 50)->create();
        factory(App\Jun::class, 50)->create();
        factory(App\Jul::class, 50)->create();
        factory(App\Aug::class, 50)->create();
        factory(App\Sep::class, 50)->create();
        factory(App\Oct::class, 50)->create();
        factory(App\Nov::class, 50)->create();
        factory(App\Dec::class, 50)->create();
        factory(App\Year::class, 50)->create();

    }
}
