<?php

declare(strict_types=1);

namespace Tests\Commands\Upgrade\V5_5_7_0\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chats')->delete();
        DB::table('chats')->insert([
            0 => [
                'id'         => 1,
                'content'    => '技术这东西；懂的越多；不懂的就越多；',
                'created_at' => '2017-7-18 07:35:12',
                'updated_at' => '2016-7-18 07:35:12',
                'deleted_at' => null,
            ],
        ]);
    }
}
