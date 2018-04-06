<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AkunModel;
class AkunController extends Controller
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
      $data = AkunModel::all();
      return response()->json($data);
    }

    public function show($id) {
      $data = AkunModel::where('id',$id)->get();
      return response()->json($data);
    }

    public function store(Request $request) {
      $data = new AkunModel();
      $data->username = $request->input('username');
      $data->password = $request->input('password');
      $data->email = $request->input('email');
      $data->save();

      return response('Berhasil Register');
    }

    public function update(Request $request, $id) {
      $data = AkunModel::where('id',$id)->first();
      $data->username = $request->input('username');
      $data->password = $request->input('password');
      $data->email = $request->input('email');
      $data->save();
      return response('Berhasil Update');
    }

    public function destroy($id) {
      $data = AkunModel::where('id',$id)->first();
      $data->delete();

      return response('Berhasil Hapus');
    }

    //
}
