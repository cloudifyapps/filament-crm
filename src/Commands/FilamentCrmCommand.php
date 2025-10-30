<?php

namespace Cloudifyapps\FilamentCrm\Commands;

use Illuminate\Console\Command;

class FilamentCrmCommand extends Command
{
    public $signature = 'filament-crm';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
