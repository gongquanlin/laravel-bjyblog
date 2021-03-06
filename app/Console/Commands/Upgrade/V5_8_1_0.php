<?php

declare(strict_types=1);

namespace App\Console\Commands\Upgrade;

use App\Models\Config;
use Illuminate\Console\Command;

class V5_8_1_0 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upgrade:v5.8.1.0';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'upgrade to v5.8.1.0';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $disks = Config::where('id', 164)->first();

        if ($disks->value === '') {
            $disks->update([
                'value' => [],
            ]);
        }
    }
}
