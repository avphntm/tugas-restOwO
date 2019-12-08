<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class restoController extends Controller
{
    //
    public function index()
    {
        $menus = DB::table('menu')->paginate(3);
        $currentPage = 1;
        $maxSize = 3;

        return view('isi.menu', compact('menus','currentPage','maxSize'));
    }

    public function insert()
    {
        $param =  json_decode(request()->getContent(), true);
        $input = array(
            'nama' => $param['nama'],
            'deskripsi' => $param['deskripsi']
        );

        $result = DB::table('menu')->insert($input);
    }
}
