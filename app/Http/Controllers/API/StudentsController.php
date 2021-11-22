<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Flash;
use Response;

class StudentsController extends Controller {
    public $successStatus = 200;

    public function getStudents(Request $request) {
        $firstname = $request['firstname']; //Getting the Passenger ID
        $token = $request['token']; 
        $id = $request['user_id']; 

        $users = User::where('id', $id)->where('remember_token', $token)->first();

        if ($users != null) {
            $students = Students::where('firstname', $firstname)->first();

            if ($students != null) {
                return response()->json($students, $this->successStatus);
            } else {
                return response()->json(['response' => 'Student Not Found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }



public function getAllPosts(Request $request) {
    $token = $request['t']; // t = token
    $id = $request['u']; // u = userid

    $users = User::where('id', $id)->where('remember_token', $token)->first();

    if ($users != null) {
        $students = Students::all();

        return response()->json($students, $this->successStatus);
    } else {
        return response()->json(['response' => 'Bad Call'], 501);
    }        
}  
}