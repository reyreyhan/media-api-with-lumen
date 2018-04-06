<?php

namespace App\Http\Controllers;

use App\PenspostModel;
use Illuminate\Http\Request;


class PenspostController extends Controller
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
      $data = PenspostModel::with('user')->get();
      return response()->json($data);
    }

    public function show($id) {
      $data = PenspostModel::where('POST_ID',$id)->with('user')->first();
      return response()->json($data);
    }

    public function store(Request $request) {
      $data = new PenspostModel();
      $data->timestamps = false;
      $data->USER_ID = $request->input('USER_ID');
      $data->POST_NAMA = $request->input('POST_NAMA');
      $data->POST_IMAGE = $request->input('POST_IMAGE');
      $data->POST_DESC = $request->input('POST_DESC');
      $data->POST_TGL_RILIS = $request->input('POST_TGL_RILIS');
      $data->save();
      return response('Success Add Data Pens Post');
    }

    public function update(Request $request, $id) {
      $data = PenspostModel::where('POST_ID',$id)->first();
      $data->timestamps = false;
      $data->timestamps = false;
      $data->USER_ID = $request->input('USER_ID');
      $data->POST_NAMA = $request->input('POST_NAMA');
      $data->POST_IMAGE = $request->input('POST_IMAGE');
      $data->POST_DESC = $request->input('POST_DESC');
      $data->POST_TGL_RILIS = $request->input('POST_TGL_RILIS');
      $data->save();
      return response('Berhasil Update Data Pens Post');
    }

    public function destroy($id) {
      $data = PenspostModel::where('POST_ID',$id)->first();
      $data->delete();
      return response('Berhasil Hapus Data Pens Post');
    }

    //
}
