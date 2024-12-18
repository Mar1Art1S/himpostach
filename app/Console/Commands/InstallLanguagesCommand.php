<?php

namespace App\Console\Commands;

use App\Models\Language;
use Illuminate\Console\Command;

class InstallLanguagesCommand extends Command
{

    protected $signature = 'languages:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Встановити мови';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->createLanguages();
        $this->info('Мова встановлена');
    }
    private function createLanguages()
    {
      $templates = [
        ['id' => '1', 'code' => 'en', 'name' => 'English', 'active' => true, 'default' => false, 'fallback' => false],
        ['id' => '2', 'code' => 'uk', 'name' => 'Ukrainian', 'active' => true, 'default' => true, 'fallback' => true],
      ];
      Language::query()->upsert($templates, ['code']);
    }
}
