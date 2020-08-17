<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleFormController extends Controller
{
    public function index()
    {
        $pets = Pet::orderBy('id', 'asc')->get();

        return view('sample_form', [
            "pets" => $pets
        ]);
    }
}
