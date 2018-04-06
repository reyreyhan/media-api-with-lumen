<?php

namespace App\Http\Controllers;

use App\PenstvModel;
use Illuminate\Http\Request;


class PenstvController extends Controller
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
      $data = PenstvModel::with(['kategori','user'])->get();
      return response()->json($data);
    }

    public function show($id) {
      $data = PenstvModel::where('TV_ID',$id)->with(['kategori','user'])->first();
      return response()->json($data);
    }

    public function store(Request $request) {
      $data = new PenstvModel();
      $data->timestamps = false;
      $data->USER_ID = $request->input('USER_ID');
      $data->KAT_ID = $request->input('KAT_ID');
      $data->TV_NAMA = $request->input('TV_NAMA');
      $data->TV_LINK = $request->input('TV_LINK');
      $data->TV_TGL_RILIS = $request->input('TV_TGL_RILIS');
      $data->TV_DESC = $request->input('TV_DESC');
      $data->save();
      return response('Success Add Data Pens TV');
    }

    public function update(Request $request, $id) {
      $data = PenstvModel::where('TV_ID',$id)->first();
      $data->timestamps = false;
      $data->USER_ID = $request->input('USER_ID');
      $data->KAT_ID = $request->input('KAT_ID');
      $data->TV_NAMA = $request->input('TV_NAMA');
      $data->TV_LINK = $request->input('TV_LINK');
      $data->TV_TGL_RILIS = $request->input('TV_TGL_RILIS');
      $data->TV_DESC = $request->input('TV_DESC');
      $data->save();
      return response('Berhasil Update Data Pens TV');
    }

    public function destroy($id) {
      $data = PenstvModel::where('TV_ID',$id)->first();
      $data->delete();
      return response('Berhasil Hapus Data Penstv');
    }

    //
}
