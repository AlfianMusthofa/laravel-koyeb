<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
   function login() {}

   function signup(Request $request)
   {
      $validatedData = $request->validate([
         "image" => "nullable",
         "name" => "required",
         "password" => "required|min:8|max:255",
         "gender" => "required",
         "bornDate" => "nullable",
         "work" => "required",
         "city" => "nullable",
         "status" => "required",
         "phone" => "required"
      ]);

      $data = [
         "image" => $request->image,
         "name" => $request->name,
         "password" => $request->password,
         "gender" => $request->gender,
         "bornDate" => $request->bornDate,
         "work" => $request->work,
         "city" => $request->city,
         "status" => $request->status,
         "phone" => $request->phone
      ];

      $response = Http::post('http://localhost:5000/api/users/signup/' . $data);
   }
}
