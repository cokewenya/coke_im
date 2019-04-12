<?php
namespace SooCoke\routes;

class route{
    protected $m,$v,$c;
    public static function make($query_string){
        return [$query_string['m'],$query_string['v'],$query_string['c']];
    }
}
