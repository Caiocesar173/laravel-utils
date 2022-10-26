<?php

//https://github.com/wowcee/laravel-package-seeds-auto-loader

namespace Caiocesar173\Utils\Providers;

use Caiocesar173\Utils\Database\Seeders\DatabaseSeeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Events\CommandFinished;
use Symfony\Component\Console\Output\ConsoleOutput;

class SeedServiceProvider extends ServiceProvider
{
    protected $seeds_path = __DIR__ . '/../../Database/Seeders';

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!env('UTILS_ONLY_CLASSES'))
            if ($this->app->runningInConsole()) {
                if ($this->isConsoleCommandContains(['db:seed', '--seed'], ['--class', 'help', '-h'])) {
                    $this->addSeedsAfterConsoleCommandFinished();
                }
            }
    }

    /**
     * Get a value that indicates whether the current command in console
     * contains a string in the specified $fields.
     *
     * @param string|array $contain_options
     * @param string|array $exclude_options
     *
     * @return bool
     */
    protected function isConsoleCommandContains($contain_options, $exclude_options = null): bool
    {
        $args = Request::server('argv', null);
        if (is_array($args)) {
            $command = implode(' ', $args);
            if (
                Str::contains($command, $contain_options) &&
                ($exclude_options == null || !Str::contains($command, $exclude_options))
            ) return true;
        }
        return false;
    }

    /**
     * Add seeds from the $seed_path after the current command in console finished.
     */
    protected function addSeedsAfterConsoleCommandFinished()
    {
        Event::listen(CommandFinished::class, function (CommandFinished $event) {
            // Accept command in console only,
            // exclude all commands from Artisan::call() method.
            if ($event->output instanceof ConsoleOutput) {
                $this->load_classphp($this->seeds_path);
                app(DatabaseSeeder::class)->run();
            }
        });
    }

    protected function load_classphp($directory)
    {
        if (is_dir($directory)) {
            $scan = scandir($directory);
            unset($scan[0], $scan[1]); //unset . and ..
            foreach ($scan as $file) {
                if (is_dir($directory . "/" . $file)) {
                    $this->load_classphp($directory . "/" . $file);
                } else {
                    if (strpos($file, '.php') !== false) {
                        $include = $directory . "/" . $file;
                        include_once($include);
                    }
                }
            }
        }
    }
}
