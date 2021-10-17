<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kota;
use Illuminate\Http\Request;


class PemerintahanController extends Controller
{
    public function index_provinsi()
    {
        $provinsis= Provinsi::all()->sortBy("id");
        return view('pemerintahan.pages.index-provinsi', compact('provinsis'));
    }

    public function addProvinsi()
    {
        return view('pemerintahan.pages.add-provinsi');
    }

    public function saveAddProvinsi(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $data= array(
            'name'=>$request->name
        );
        Provinsi::create($data);
        return redirect('/pemerintah')->with(['success' => 'Data Provinsi ' . $request->name . ' berhasil ditambahkan!']);;
    }

    public function editProvinsi($id)
    {
        $provinsi = Provinsi::find($id);
        return view('pemerintahan.pages.edit-provinsi', compact('provinsi'));
    }

    public function saveEditProvinsi(Request $request, $id)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $data= array(
            'name'=>$request->name
        );

        $provinsi = Provinsi::find($id);
        $provinsi->update($data);
        return redirect('/pemerintah')->with(['success' => 'Data Provinsi ' . $provinsi->name . ' berhasil diupdate!']);;
    }

    public function deleteProvinsi($id){
        $provinsi= Provinsi::find($id);
        $provinsi->delete();
        return redirect('/pemerintah')->with(['success' => 'Data Provinsi ' . $provinsi->name . ' berhasil dihapus!']);
    }


    // KOTA / KABUPATEN

    public function list_kota($id){
        // $kota=Kota::with(array('provinsi'=> function($query)
        // {
        //     $query->where('provinsi.id')
        // }))->get();
        $kotas=Kota::with('provinsi')->where('provinsi_id', $id)->get();
        $provinsi=Provinsi::where('id', $id)->first();
        return view('pemerintahan.pages.list-kota-provinsi')->with(compact('kotas', 'provinsi'));
    }

    public function index_kota(){
        // $kota=Kota::with(array('provinsi'=> function($query)
        // {
        //     $query->where('provinsi.id')
        // }))->get();
        $kotas=Kota::with('provinsi')->get();
        return view('pemerintahan.pages.index-kota',compact('kotas'));
    }

    public function addKota(){
        $provinsis=Provinsi::all();
        return view('pemerintahan.pages.add-kota', compact('provinsis'));
    }

    public function saveAddKota(Request $request){
        $request->validate([
            'name'=>'required',
            'provinsi_id'=>'required'
        ]);
        $kota= new Kota();
        $kota->name = $request->name;
        $kota->provinsi_id= $request->provinsi_id;
        $kota->save();
      
        return redirect()->route('listKota')->with(['success' => 'Data Kota ' . $kota->name . ' berhasil ditambahkan!']);;

    }

    public function editKota($id){
        $provinsis=Provinsi::all();
        $kota = Kota::find($id);
        return view('pemerintahan.pages.edit-kota')->with(compact('provinsis', 'kota'));
    }

    public function saveEditKota(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'provinsi_id'=>'required'
        ]);
        $data= array(
            'name'=>$request->name,
            'provinsi_id'=>$request->provinsi_id
        );
        $kota= Kota::find($id);
        $kota->update($data);
        return redirect()->route('listKota')->with(['success' => 'Data Kota ' . $kota->name . ' berhasil diupdate!']);

    }

    public function deleteKota($id){
        $kota= Kota::find($id);
        $kota->delete();
        return redirect()->route('listKota')->with('sucess', 'Data kota berhasil dihapus');
    }

}
