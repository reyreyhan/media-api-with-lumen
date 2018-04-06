<?php

namespace App\Http\Controllers;

use App\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
      $data = KategoriModel::with('penstv')->get();
      return response()->json($data);
    }

    public function show($id) {
      $data = KategoriModel::where('KAT_ID',$id)->get();
      return response()->json($data);
    }

    public function store(Request $request) {
      $data = new KategoriModel();
      $data->timestamps = false;
      $data->KAT_NAMA = $request->input('KAT_NAMA');
      $data->KAT_DESC = $request->input('KAT_DESC');
      $data->save();
      return response('Success Add Data Kategori');
    }

    public function update(Request $request, $id) {
      $data = KategoriModel::where('KAT_ID',$id)->first();
      $data->timestamps = false;
      $data->KAT_NAMA = $request->input('KAT_NAMA');
      $data->KAT_DESC = $request->input('KAT_DESC');
      $data->save();
      return response('Berhasil Update Data Kategori');
    }

    public function destroy($id) {
      $data = KategoriModel::where('KAT_ID',$id)->first();
      $data->delete();
      return response('Berhasil Hapus Data Kategori');
    }

    //
}
