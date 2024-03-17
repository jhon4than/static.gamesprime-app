<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function verifySession()
    {
        $data = json_decode($this->rJSON(), true);

        return response()->json($data);
    }

    public function verifyOperatorPlayerSession()
    {
        $data = json_decode($this->rJSON(), true);

        return response()->json($data);
    }

    public function rJSON()
    {

    }
}
