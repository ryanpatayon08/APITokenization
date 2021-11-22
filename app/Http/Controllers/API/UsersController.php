<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\User;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

   public function login(){
     if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
          $user = Auth::user();

          $success['token'] = Str::random(64);
          $success['username'] = $user->username;
          $success['id'] = $user->id;
          $success['name'] = $user->name;

          $user->remember_token = $success['token'];
          $user->save();
          return response()->json($success, $this->successStatus);

          
      } else {
          return response()->json(['response' => 'User not found'], 404);
      }
  }

  public function register(Request $request) {
     $validator = Validator::make($request->all(), [
         'name' => 'required',
         'username' => 'required',
         'email' => 'required|email',
         'password' => 'required',
     ]);

     if ($validator->fails()) {
         return response()->json(['response' => $validator->errors()], 401);
     } else {
         $input = $request->all();

         if (User::where('email', $input['email'])->exists()) {
             return response()->json(['response' => 'Email already exists'], 401);
         } elseif(User::where('username', $input['username'])->exists()) {
             return response()->json(['response' => 'Username already exists'], 401);
         } else {
             $input['password'] = bcrypt($input['password']);
             $user = User::create($input);

             $success['token'] = Str::random(64);
             $success['username'] = $user->username;
             $success['id'] = $user->id;
             $success['name'] = $user->name;

             return response()->json($success, $this->successStatus);
         }
     }
 }



 public function studentregister(Request $request) {
     $validator = Validator::make($request->all(), [
         'firstname' => 'required',
         'middlename' => 'required',
         'lastname' => 'required',
         'birthdate' => 'required',
         'gender' => 'required',
         'address' => 'required',
         'citizenship' => 'required',
         'religion' => 'required',
     ]);

     if ($validator->fails()) {
         return response()->json(['response' => $validator->errors()], 401);
     } else {
         $input = $request->all();

         if (Students::where('lastname', $input['lastname'])->exists()) {
             return response()->json(['response' => 'Lastname already exists'], 401);
         } elseif(Students::where('firstname', $input['firstname'])->exists()) {
             return response()->json(['response' => 'Firstname already exists'], 401);
         } else {
            
             $students = Students::create($input);

             $success['token'] = Str::random(64);
             $success['firstname'] = $students->firstname;
             $success['middlename'] = $students->middlename;
             $success['lastname'] = $students->lastname;
             $success['birthdate'] = $students->birthdate;
             $success['gender'] = $students->gender;
             $success['address'] = $students->address;
             $success['citizenship'] = $students->citizenship;
             $success['religion'] = $students->religion;

             return response()->json($success, $this->successStatus);
         }
     }
 }




 public function resetPassword(Request $request) {
     $user = User::where('email', $request['email'])->first();

     if ($user != null) {
         $user->password = bcrypt($request['password']);
         $user->save();

         return response()->json(['response' => 'User has successfully resetted his/her password'], $this->successStatus);
     } else {
         return response()->json(['response' => 'User not found'], 404);
     }
 }
}

?>