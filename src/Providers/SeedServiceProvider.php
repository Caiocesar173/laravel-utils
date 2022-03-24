<?php

//https://github.com/wowcee/laravel-package-seeds-auto-loader

namespace Caiocesar173\Utils\Providers;

use Illuminate\Support\Str;
use Caiocesar173\Utils\Classes\Arrays;
use Caiocesar173\Utils\Entities\Seeds;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;


class SeedServiceProvider extends ServiceProvider
{
    private $seeds_path;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->seeds_path = __DIR__.'/../../Database/Seeds';

        if(env('UTILS_SEEDS_ENABLE') !== TRUE)
            return;

        if ($this->app->runningInConsole()) {
            if ($this->isConsoleCommandContains([ 'db:seed', '--seed' ], [ '--class', 'help', '-h' ])) {
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
    protected function isConsoleCommandContains($contain_options, $exclude_options = null) : bool
    {
        $args = Request::server('argv', null);
        if (is_array($args)) {
            $command = implode(' ', $args);
            if (
                Str::contains($command, $contain_options) &&
                ($exclude_options == null || !Str::contains($command, $exclude_options))
            ) {
                return true;
            }
        }
        return false;
    }

    /**
     * Add seeds from the $seed_path after the current command in console finished.
     */
    protected function addSeedsAfterConsoleCommandFinished()
    {
        $migrations = $this->addSeedsFrom(__DIR__ . $this->seeds_path);
        if(is_null($migrations))
            echo "\033[0;32mNothing to migrate";
            
        
        //Event::listen(CommandFinished::class, function(CommandFinished $event) {
        //    // exclude all commands from Artisan::call() method.
        //    if ($event->output instanceof ConsoleOutput) {
        //        $this->addSeedsFrom(__DIR__ . $this->seeds_path);
        //    }
        //});
    }

    /**
     * Register seeds.
     *
     * @param string  $seeds_path
     * @return void
     */
    protected function addSeedsFrom($seeds_path)
    {
        $file_names = $this->getSeedsEnable();

        foreach ($file_names as $filename)
        {
            if(!class_exists($filename))
                require_once($filename);
           
            $classes = $this->getClassesFromFile($filename);
            foreach ($classes as $class) 
            {   
                $seeded = Seeds::where('seed', $class)->first();
                if(is_null($seeded))
                {
                    echo "\033[1;33mSeeding:\033[0m {$class}\n";
                    $startTime = microtime(true);
                 
                    $call = Artisan::call('db:seed', [ '--class' => $class, '--force' => '' ]);

                    $runTime = round(microtime(true) - $startTime, 2);
                    echo "\033[0;32mSeeded:\033[0m {$class} ({$runTime} seconds)\n";
                    Seeds::create(['seed' => $class]);
                }
            }
        }
    }

    /**
     * Get full class names declared in the specified file.
     *
     * @param string $filename
     * @return array an array of class names.
     */
    private function getClassesFromFile(string $filename) : array
    {
        // Get namespace of class (if vary)
        $namespace = "";
        $lines = file($filename);
        $namespaceLines = preg_grep('/^namespace /', $lines);
        if (is_array($namespaceLines)) {
            $namespaceLine = array_shift($namespaceLines);
            $match = array();
            preg_match('/^namespace (.*);$/', $namespaceLine, $match);
            $namespace = array_pop($match);
        }

        // Get name of all class has in the file.
        $classes = array();
        $php_code = file_get_contents($filename);
        $tokens = token_get_all($php_code);
        $count = count($tokens);
        
        for ($i = 2; $i < $count; $i++) {
            if ($tokens[$i - 2][0] == T_CLASS && $tokens[$i - 1][0] == T_WHITESPACE && $tokens[$i][0] == T_STRING) {
                $class_name = $tokens[$i][1];
                if ($namespace !== "") {
                    $classes[] = $namespace . "\\$class_name";
                } else {
                    $classes[] = $class_name;
                }
            }
        }
        
        return $classes;
    }

    protected function getSeedsEnable()
    {
        $seeds = [];
        $seeds_path = $this->seeds_path;

        if( env('UTILS_STUATION_ENABLE') === TRUE ) 
        {
            $files = [
                "$seeds_path/Situation/Situations.php",
            ];

            array_push($seeds, $files);
        }

        if( env('UTILS_GEOLOC_ENABLE') === TRUE ) 
        {
            $files = [
                "$seeds_path/GeoInfo/Geo/Continents.php",
                "$seeds_path/GeoInfo/Geo/Coutries.php",
                "$seeds_path/GeoInfo/Geo/States.php",
                "$seeds_path/GeoInfo/Geo/Cities.php", 

                "$seeds_path/GeoInfo/Areas/NetworkAreas.php", 
                "$seeds_path/GeoInfo/Areas/PhoneAreas.php", 

                "$seeds_path/GeoInfo/Currency/Currencies.php", 

                "$seeds_path/GeoInfo/Language/Languages.php", 
                "$seeds_path/GeoInfo/Language/LanguageMaps.php", 
                
                "$seeds_path/GeoInfo/Zones/TimeZones.php", 
                "$seeds_path/GeoInfo/Zones/TimeZoneMaps.php", 
            ];

            array_push($seeds, $files);
        }
        

        if( env('UTILS_PERMISSION_ENABLE') === TRUE ) 
        {
            $files = [
                "$seeds_path/Permission/Permissions.php",
                "$seeds_path/Permission/PermissionItems.php",
                "$seeds_path/Permission/PermissionMaps.php",
            ];

            array_push($seeds, $files);
        }

        if( env('UTILS_AUTHENTICATION_ENABLE') === TRUE ) 
        {
            $files = [
                "$seeds_path/Authentication/Users.php",
            ];

            array_push($seeds, $files);
        }

        return Arrays::Flatten($seeds);
    }


    protected static function getFiles($seeds_path): array
    {
        $path = scandir($seeds_path);

        $folders = array_diff($path, array('.', '..'));
        
        $files = [];
        foreach( $folders as $folder )
        {   
            $files_ = "$seeds_path/$folder";

            if(is_dir($files_))
            {
                $path = scandir("$seeds_path/$folder");
                $file_set = array_diff($path, array('.', '..'));
            
                $files_ = [];
                foreach($file_set as $file){
                    $file = "$seeds_path/$folder/$file";
                    require_once($file);
                    array_push($files_, $file);
                }
                
            }
            
            array_push($files, $files_);
        }
        $file_names = Arrays::Flatten($files);
    
        return $file_names;
    }
}