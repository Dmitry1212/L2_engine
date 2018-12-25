<?php

namespace app\engine;

class Autoload
{
    public function loadClass($fileName) {
        $fileName = substr ($fileName, 3);
        $fileName = "..{$fileName}.php";
        include $fileName;
    }
}