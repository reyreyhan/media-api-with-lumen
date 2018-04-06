<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
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
      $data = UserModel::with(['penstv','penstoon','penspost','core'])->get();
      return response()->json($data);
    }

    public function show($id) {
      $data = UserModel::where('USER_ID',$id)->get();
      return response()->json($data);
    }

    public function store(Request $request) {
      $data = new UserModel();
      $data->timestamps = false;

      $nrp = $request->input('USER_ID');
      $hasil = str_split($nrp);

      $data->USER_ID = $hasil[0] . $hasil[1]. $hasil[4] . $hasil[5] . $hasil[8] . $hasil[9];
      $data->USER_NAME = $request->input('USER_NAME');
      $data->USER_EMAIL = $request->input('USER_EMAIL');
      $data->USER_PASSWORD = $request->input('USER_PASSWORD');
      $data->USER_PRIVILLEGES = $request->input('USER_PRIVILLEGES');
      $data->USER_DISPLAY = $request->input('USER_DISPLAY');
      $data->save();
      return response('Success Add Data User');
    }

    public function update(Request $request, $id) {
      $data = UserModel::where('USER_ID',$id)->first();
      $data->timestamps = false;
      $data->USER_EMAIL = $request->input('USER_EMAIL');
      $data->USER_PASSWORD = $request->input('USER_PASSWORD');
      $data->save();
      return response('Berhasil Update Data User');
    }

    public function destroy($id) {
      $data = UserModel::where('USER_ID',$id)->first();
      $data->delete();
      return response('Berhasil Hapus Data User');
    }

    public function login(Request $request) {
      $A = $request->input('USER_NAME');
      $B = $request->input('USER_PASSWORD');
      $data = UserModel::where('USER_NAME',$A)->where('USER_PASSWORD',$B)->count();

      if($data == 1) {
        $dataa = UserModel::where('USER_NAME',$A)->where('USER_PASSWORD',$B)->first();
        return response()->json($dataa);
      } else {
        echo "hw";
      }
    }

    //
}
