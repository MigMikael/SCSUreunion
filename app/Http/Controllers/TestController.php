<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testSubStr()
    {
        $sc = '0756050';
        $sc = substr($sc, 2, 2);
        $sc = intval($sc) - 14;

        return $sc;
    }
}
