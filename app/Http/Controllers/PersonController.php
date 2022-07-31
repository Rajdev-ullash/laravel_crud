<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function create(){
        return view('person.create');
    }
    public function store(Request $req){
        $name = $req->name;
        $email = $req->email;
        $city = $req->city;
        $dob = $req->dob;
        $salary = $req->salary;

        DB::table('persons')->insert([
            'name' => $name,
            'email' => $email,
            'city' => $city,
            'birth_date' => $dob,
            'salary' => $salary
        ]);

        return redirect('persons');

    }
    public function all(){
        $data = DB::table('persons')->get();
        return view('person.all',['persons'=>$data]);
    }
}
