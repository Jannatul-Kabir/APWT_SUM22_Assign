<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Symfony\Polyfill\Intl\Idn\Info;

class peopleController extends Controller

{
    //
    public function details($id){
        $name="People $id";
        $dob ="4456";
        return view('people.details')
        ->with('n',$name)
        ->with('id',$id)
        ->with('dob',$dob);
    }
    public function list(){
        $peoples = People::all();

        return view('people.list')
               ->with('peoples',$peoples);
    }
function create(){
    return view('people.create');
}
function createSubmit(Request $req){

    $this->validate($req,
         [
            "name"=>"required|max:30",
            "id"=>"required",
            "dob"=>"required",
            "email"=>'required|email',
            "password"=>"required|min:8",
            "conf_password"=>"required|min:8|same:password"
            
         ],
         [
             "name.required"=> "Please provide your name",
             "name.max"=> "Name should not exceed 30 characters"
         ]
        );

        $p1 = new People();
        $p1->id = $req->id;
        $p1->name = $req->name;
        $p1->dob = $req->dob;
        $p1->email = $req->email;
        $p1->password = $req->password;
        $p1->save(); 

    return "Submitted with valid value";
    
}
}
