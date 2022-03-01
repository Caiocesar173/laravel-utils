<?php 

namespace Caiocesar173\Utils\Classes;

use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Classes\DataTable;


class Export
{
    public static function CSV($filename = 'name', $listArray, $arrayKeys = null)
    {   
        $headers = [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Content-type'        => 'text/csv',
            'Content-Disposition' => 'attachment; filename='.$filename.'.csv',
            'Expires'             => '0',
            'Pragma'              => 'public'
        ];

        if (!isset($listArray))
            return ApiReturn::ErrorMessage("É necessario elementos para o arquivo!");

        # add headers for each column in the CSV download
        if( !isset($arrayKeys) )
            array_unshift($listArray, array_keys($listArray[0]));

        $callback = function() use ($listArray) 
        {
            $FH = fopen('php://output', 'w');
            foreach ($listArray as $row)
                fputcsv($FH, $row, ';');
            
            fclose($FH);
        };

        return ApiReturn::Stream($callback, $headers);
    }

    public static function DataTable(DataTable $instance, $filename= 'file')
    {
        $instance = $instance->getData();
        $listArray = [];

        foreach($instance as $onlyData)
            array_push( $listArray ,(array)$onlyData);
        
        if(empty($listArray))
            throw new \Exception("No records found", 1);

        return self::CSV("$filename.csv", $listArray);
    }
}