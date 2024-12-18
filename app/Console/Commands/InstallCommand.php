<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{

    protected $signature = 'install';

    protected $description = 'Встановити программу';

    public function handle(): void
    {
        $this->call(InstallLanguagesCommand::class);
        $this->info('Программа встановлена');
    }
}
