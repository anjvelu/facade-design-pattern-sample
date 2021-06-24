<?php

namespace App;

class Hash 
{
    private const ALGORITHMS  = [
        'md5'   =>  MD5::class,
        'sha1'  =>  SHA1::class,
    ];

    public static function make(string $value, string $algorithm) : string
    {
        if( !array_key_exists($algorithm, self::ALGORITHMS) ) {
            throw new Exception("Error: ALG. is not exists", 1);
        }

        $algorithm_class = self::ALGORITHMS[$algorithm];
        return (new $algorithm_class)->make($value);
    }
}
