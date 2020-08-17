<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    function index()
    {
    	$data['jurusan'] = Jurusan::orderby('id')->get();
    	return view('jurusan.index')->with($data);
    }

    function add()
    {
    	return view('jurusan.add');
    }

    function save(Request $r)
    {
    	$jurusan = new Jurusan;
    	$jurusan->nama = $r->input('nama');
    	$jurusan->kajur = $r->input('kajur');
    	$jurusan->jumlah_siswa = 0;
    	$jurusan->save();

    	return redirect(url('jurusan'));
    }

    function edit($id)
    {
    	$jurusan = Jurusan::find($id);
    	$data['jurusan'] = Jurusan::where('id', $id)->get();

    	return view('jurusan.edit')->with($data);
    }

    function update(Request $r, $id)
    {
    	$jurusan = Jurusan::find($id);
    	$jurusan->nama = $r->input('nama');
    	$jurusan->kajur = $r->input('kajur');
        $jurusan->save();
        
    	return redirect(url('jurusan'));
    }

    function delete($id)
    {
    	Jurusan::find($id)->delete();

    	return redirect(url('jurusan'));
    }
}