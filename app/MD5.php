<?php

namespace App;

class MD5 implements Hasher
{
    public function make(string $value) : string {
        return md5($value);
    }
}
