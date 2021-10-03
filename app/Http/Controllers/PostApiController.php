<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use \App\Models\Number;

class PostApiController extends Controller
{
    public function retrieve(Request $request) {

        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
        ]);

        $errors = $validator->errors();
        $id = $request->input("id");
        if(ctype_digit($id)) {
            return Number::select('number')
                ->where('id', '=', $id)
                ->get();
        } else {
            return $errors;
        }

    }
}
