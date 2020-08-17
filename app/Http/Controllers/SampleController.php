<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class SampleController extends Controller
{
    public function index() {
        return view('sample');
    }

    public function select() {
        $pochi = Pet::find(1);

        return view('select', [
            "pochi" => $pochi
        ]
        );
    }

    public function selectMany() {
        $pets = Pet::orderBy('id', 'asc')->get();

        return view('select_many', [
            "pets" => $pets
        ]);
    }

    public function insert() {
        $pet = new Pet();

        $pet->name = "shiro";
        $pet->birthday = "1980/06/16";
        $pet->gender = "female";

        $pet->save();

        return "データを挿入しました";
    }

    public function delete() {
        Pet::orderBy('id', 'asc')->first()->delete();

        return 'データを削除しました';
    }

    public function update() {
        Pet::orderBy('id', 'asc')->first()->update(['name' => "jonny"]);


        return 'データを更新しました';
    }
}
