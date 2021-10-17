<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals= Animal::all()->sortBy("id");
        return view('animals.table', compact('animals'));
    }
    public function addanimal()
    {
        return view('animals.add');
    }
    public function saveanimal(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'foto'=>'required|image|mimes:jepg,png,jpg|max:2048',
            'jumlah_kaki' => 'required',
            'description'=> 'required',
        ]);
        $image = $request->file('foto');
        $new_image= rand().".".$image ->getClientOriginalExtension();
       
        $data= array(
            'name'=> $request->name,
            'image'=> $new_image,
            'jumlah_kaki'=> $request->jumlah_kaki,
            'description'=> $request->description, 
        );
        $image->move(public_path('foto'),$new_image);
    
        Animal::create($data);
        return redirect('/')->with('succes','data berhasil disimpan');
    }
    public function detail($id)
    {
        $animal = Animal::find($id);
        return view('animals.detail', compact('animal'));
    }
    public function edit($id)
    {
        $animal = Animal::find($id);
        return view('animals.edit', compact('animal'));
    }
    public function saveedit(Request $request, $id)
    {
        // $animal = Animal::find($id);
        // $animal->name = $request->name;
        // $animal->image = $request->image;
        // $animal->jumlah_kaki = $request->jumlah_kaki;
        // $animal->description = $request->description;
        // $animal->save();
        // return redirect('/');

        $old_image_name= $request->hidden_image;
        $image = $request->file('foto');

        if($image !=''){ //jika  image baru  ditambah 
            $request->validate([
                'name' => 'required',
                'foto'=>'required|image|mimes:jepg,png,jpg|max:2048',
                'jumlah_kaki' => 'required',
                'description'=> 'required',
                
            ]);
            $image_name=$old_image_name; //ganti nama image barunya dengan menggunakan nama image yang lama
            $image->move(public_path('foto'),$image_name);
        }else{
            $request->validate([
                'name' => 'required',
                'jumlah_kaki' => 'required',
                'description'=> 'required'
            ]);
            $image_name=$old_image_name;
           
        }
        
        $data= array(
            'name'=> $request->name,
            'image'=>$image_name,
            'jumlah_kaki'=> $request->jumlah_kaki,
            'description'=> $request->description,
        );     
        

        $animal=Animal::find($id);
        $animal->delete();
        Animal::create([
            'id' => $id,
            'name'=> $request->name,
            'image'=>$image_name,
            'jumlah_kaki'=> $request->jumlah_kaki,
            'description'=> $request->description,
        ]);
        return redirect('/')->with(['success' => 'Data Berhasil Diupdate! Ctrl + Shift + R untuk melihat perubahan gambar!']);
    }
    public function delete($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        return redirect('/');
    }
}
