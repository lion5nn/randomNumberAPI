<?php

namespace App\Http\Controllers;

use \App\Models\Number;

class GetApiController extends Controller
{
    public function generate() {
        $randomNumber = rand(0, 999999);
        $resultArr = Number::create([
            'number' => $randomNumber,
        ]);
        $result = $resultArr['id'];
        return $result;
    }
}
