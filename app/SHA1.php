<?php

namespace App;

class SHA1 implements Hasher
{
    public function make(string $value) : string {
        return sha1($value);
    }
}
