<?php

namespace App;

interface Hasher {
    public function make(string $value) : string;
}