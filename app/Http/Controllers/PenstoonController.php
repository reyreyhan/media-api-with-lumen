<?php

namespace App\Http\Controllers;

use App\PenstoonModel;
use Illuminate\Http\Request;


class PenstoonController extends Controller
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
      $data = PenstoonModel::with('user')->get();
      return response()->json($data);
    }

    public function show($id) {
      $data = PenstoonModel::where('TOON_ID',$id)->with('user')->first();
      return response()->json($data);
    }

    public function store(Request $request) {
      $data = new PenstoonModel();
      $data->timestamps = false;
      $data->USER_ID = $request->input('USER_ID');
      $data->TOON_NAMA = $request->input('TOON_NAMA');
      $data->TOON_IMAGE = $request->input('TOON_IMAGE');
      $data->TOON_TGL_NAIK = $request->input('TOON_TGL_NAIK');
      $data->TOON_TGL_TURUN = $request->input('TOON_TGL_TURUN');
      $data->TOON_DESC = $request->input('TOON_DESC');
      $data->save();
      return response('Success Add Data Pens Toon');
    }

    public function update(Request $request, $id) {
      $data = PenstoonModel::where('TOON_ID',$id)->first();
      $data->timestamps = false;
      $data->USER_ID = $request->input('USER_ID');
      $data->TOON_NAMA = $request->input('TOON_NAMA');
      $data->TOON_IMAGE = $request->input('TOON_IMAGE');
      $data->TOON_TGL_NAIK = $request->input('TOON_TGL_NAIK');
      $data->TOON_TGL_TURUN = $request->input('TOON_TGL_TURUN');
      $data->TOON_DESC = $request->input('TOON_DESC');
      $data->save();
      return response('Berhasil Update Data Pens Toon');
    }

    public function destroy($id) {
      $data = PenstoonModel::where('TOON_ID',$id)->first();
      $data->delete();
      return response('Berhasil Hapus Data Toon');
    }

    //
}
