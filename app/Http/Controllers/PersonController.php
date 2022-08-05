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
        $gender = $req->gender;
        $active_status = $req->active_status;
        function active_status_check($value){
            return $value == '1'? 1 :0;
        }
        $data = active_status_check($active_status);
        $hobby = json_encode($req->hobby);

        DB::table('persons')->insert([
            'name' => $name,
            'email' => $email,
            'city' => $city,
            'birth_date' => $dob,
            'salary' => $salary,
            'gender' => $gender,
            'active_status' => $data,
            'hobby' => $hobby,
        ]);

        return redirect('persons');

    }
    public function all(){
        $data = DB::table('persons')->get();
        return view('person.all',['persons'=>$data]);
    }

    public function edit($id){
        $result = DB::table('persons')->where('id','=',$id)->first();
        return view('person.edit',['person'=>$result]);
    }

    public function update(Request $req,$id){
        $name = $req->name;
        $email = $req->email;
        $city = $req->city;
        $dob = $req->dob;
        $salary = $req->salary;
        $gender = $req->gender;
        $active_status = $req->active_status;
        function active_status_check($value){
            return $value == '1'? 1 :0;
        }
        $data = active_status_check($active_status);
        $hobby = json_encode($req->hobby);

        DB::table('persons')->where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'city' => $city,
            'birth_date' => $dob,
            'salary' => $salary,
            'gender' => $gender,
            'active_status' => $data,
            'hobby' => $hobby,
        ]);

        return redirect('persons');
    }
    public function delete($id){
        $deleted = DB::table('persons')->where('id','=',$id)->delete();
        return redirect('persons');
    }

}
