<?php

require_once __DIR__ . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class FacadeDesignPattern extends TestCase
{
    public function test_facade_design_pattern() : void
    {
        $hashed_value = App\Hash::make('test', 'md5');
        $this->assertSame($hashed_value, '098f6bcd4621d373cade4e832627b4f6');

        $hashed_value = App\Hash::make('foo', 'sha1');
        $this->assertSame($hashed_value, '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33');
    }
}
