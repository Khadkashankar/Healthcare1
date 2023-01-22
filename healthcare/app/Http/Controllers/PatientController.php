<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    //
    public function submit(Request $request)
    {
$req=new Patient;
$req->first_name=$request->first_name;
$req->last_name=$request->last_name;
$req->age=$request->age;
$req->address=$request->address;
$req->email=$request->email;
$req->phone_number=$request->phone_number;
$result=$req->save();
    }
}
