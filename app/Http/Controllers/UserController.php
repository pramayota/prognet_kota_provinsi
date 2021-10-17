<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function simpan_data(Request $request)
    {
        $formdata = $request->validate([
            'Nama'=>'required',
            'Alamat'=>'required',
            'Username'=>'required',
            'Password'=>'required',
            'Blood'=>'required',
            'Hobby'=>'required',     
            'Gender'=>'required',  
            'Profile'=> 'required'     
        ]);
        $data = array(
            $nama = 'Nama'=> $request ->input('Nama'),
            $alamat ='Alamat' => $request ->input('Alamat'),
            $username ='Username' => $request ->input('Username'),
            $password ='Password' => $request ->input('Password'),
            $blood ='Blood' => $request ->input('Blood'),
            $hobby ='Hobby' => $request ->input('Hobby'),
            $gender ='Gender' => $request ->input('Gender'),
            $profile ='Profile' => $request ->input('Profile'),
        );
        return view('pages.result-form', compact('data'));
        // return $formdata;
        // return view('pages.result-form',compact('formdata'));

        // DB::table('name_table')->insert([
        //     'Nama'=> $request->name,
        // ]);
        // return $formdata;
        // $this->validate($request, [

        // ])
        // return request()->all();
        // $request = request()->all();
        // return view('pages.result-form',compact('request'));
    }
}
