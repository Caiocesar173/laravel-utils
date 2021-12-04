<?php

namespace Caiocesar173\Utils\Traits;

trait RepositoryServiceProviderTrait
{
    protected function registerRepository(string $path,string $folder)
    {
        $pathRepositories   = str_replace('/','\\', config('repository.generator.paths.repositories'));
        $pathInterfaces     = str_replace('/','\\', config('repository.generator.paths.interfaces'));
        $tempFiles          = glob( "{$path}/{$pathInterfaces}/*php" );


        foreach($tempFiles as $file){

            $repository     = pathinfo($file)['filename'];
            $interface      = "{$folder}\\{$pathInterfaces}\\{$repository}";
            $eloquent       = "{$folder}\\{$pathRepositories}\\Eloquent\\{$repository}Eloquent";
            
            app()->bind($interface, $eloquent);
        }
    }
}
