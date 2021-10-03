<?php

namespace App\Http\Controllers;

use \App\Models\Number;

class GetApiController extends Controller
{
    public function generate() {
        $randomNumber = rand(0, 999999);
        $result = Number::create([
            'number' => $randomNumber,
        ]);
        return [
            "ID" => $result["id"],
            "Number" => $result["number"],
        ];
    }
}
