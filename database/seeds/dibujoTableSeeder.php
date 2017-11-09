<?php

use Illuminate\Database\Seeder;
use app\dibujo

class dibujoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(dibujo::class, 80)->create();
    }
}
