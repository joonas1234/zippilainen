<?php

namespace Joonas1234\Zippilainen;

class Zippilainen
{

    /**
     * Get zips in specified area
     * 
     * @param string $area
     * @return array
     */
    static function zipsInArea($area) 
    {

        $area = strtolower($area);
        $zips = json_decode(file_get_contents(__DIR__.'/resources/zips-lower.json'), true);
        return $zips[$area] ?? null;        

    }

    /**
     * Get zips as keys and area as value
     * 
     * @return array
     */
    static function zipsAsKeys() 
    {

        return json_decode(file_get_contents(__DIR__.'/resources/zips-as-keys.json'), true);

    }
 
    /**
     * Get areas with zips, optionally areas can be returned lowercase
     * 
     * @param boolean $lower
     * @return array
     */
    static function areasAndZips($lower = false) 
    {
         
        if($lower)
            return file_get_contents(__DIR__.'/resources/zips-lower.json');        

        return file_get_contents(__DIR__.'/resources/zips.json');        
 
     }
 
    /**
     * Get only areas, optionally lowercase
     * 
     * @param boolean $lower
     * @return array
     */
    static function areas($lower = false) 
    {
         
        if($request->input('lower') == true)
            $zips = json_decode(file_get_contents(__DIR__.'/resources/zips-lower.json'), true);
        else
            $zips = json_decode(file_get_contents(__DIR__.'/resources/zips.json'), true);
        
        return json_encode(array_keys($zips) ?? null);
         
     }
 
    /**
     * Get area by zip
     * 
     * @param mixed $zip
     * @return string
     */
    static function areaByZip($zip) 
    {
         
        $zips = json_decode(file_get_contents(__DIR__.'/resources/zips-as-keys.json'), true);
        
        return $zips[$zip];
 
    }
 
}