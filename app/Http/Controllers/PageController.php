<?php

namespace App\Http\Controllers;

use App\PageModel;
use Illuminate\Http\Request;


class PageController extends Controller
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
      $data = PageModel::with('core')->get();
      return response()->json($data);
    }

    public function show($id) {
      $data = PageModel::where('PAGE_ID',$id)->with('core')->first();
      return response()->json($data);
    }

    public function store(Request $request) {
      $data = new PageModel();
      $data->timestamps = false;
      $data->CORE_ID_PAGE = $request->input('CORE_ID_PAGE');
      $data->PAGE_IMAGE = $request->input('PAGE_IMAGE');
      $A = PageModel::where('CORE_ID_PAGE',$request->input('CORE_ID_PAGE'))->count();
      $data->PAGE_NUMBER = $A + 1;
      $data->save();
      return response('Success Add Data Page');
    }

    public function update(Request $request, $id) {
      $data = PageModel::where('PAGE_ID',$id)->first();
      return response('Tidak Bisa Update Gambar');
    }

    public function destroy($id) {
      $data = PageModel::where('PAGE_ID',$id)->first();
      $data->delete();
      return response('Berhasil Hapus Data Page');
    }

    //
}
