<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use \App\Models\Number;

class PostApiController extends Controller
{
    protected $fillable = [
        'number', 'id'
    ];

    public function retrieve(Request $request) {

        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
        ]);

        $errors = $validator->errors();
        $id = $request->input("id");
        if(ctype_digit($id)) {
            $result = Number::select('number')
                ->where('id', '=', $id)
                ->get();
            return $result[0]["number"];
        } else {
            return $errors;
        }
    }
}
