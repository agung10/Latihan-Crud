<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Jurusan;

class KelasController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}	

	function index()
	{
		$data['kelas'] = Kelas::orderby('id')->get();
		return view('kelas.index')->with($data);
	}

	function add()
	{
		$data['jurusan'] = Jurusan::all();
		$data['kelas'] = Kelas::all();

		return view('kelas.add')->with($data);
	}
 function save(Request $r)
	{
		$kelas = new Kelas;
		$kelas->jurusan_id = $r->input('jurusan_id');
		$kelas->nama = $r->input('nama');
		$kelas->save();

		return redirect(url('kelas'));
	}

	function edit($id)
	{
		$data['kelas'] = Kelas::find($id);
		$data['jurusan'] = Jurusan::all();

		return view('kelas.edit')->with($data);
	}

	function update(Request $r, $id)
	{
		$kelas = Kelas::find($id);
		$kelas->nama = $r->input('nama');
		$kelas->jurusan_id = $r->input('jurusan_id');
		$kelas->save();

		return redirect(url('kelas'));
	}

	function delete($id)
	{
		Kelas::find($id)->delete();

		return redirect(url('kelas'));
	}
}