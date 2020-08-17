@extends('layouts.app')

@section('content')
	<div class="container page" style="padding-top: 70px;">
		<div class="card">
			<div class="card-header"><i class="fas fa-graduation-cap"></i> Tambah Siswa Baru</div>
			<div class="card-body">
				<form method="POST" action="{{ url('siswa/update/'.$siswa->id) }}" class="form">
					@csrf
					<div class="form-group row">
					    <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="nama" placeholder="Nama Siswa" name="nama" value="{{ $siswa->nama }}">
						</div>
					</div>
					<div class="form-group row">
					    <label for="Kelas_id" class="col-sm-2 col-form-label">Kelas ID</label>
						<div class="col-sm-10">
						     <select class="form-control" id="Kelas_id" name="kelas_id">
						     	@foreach($kelas as $key)
						     	<option value="{{ $key->id }}">{{ $key->id }} ( {{$key->nama}} )</option>
						     	@endforeach
						     </select>
						</div>
					</div>
					<div class="form-group row">
					    <label for="jurusan_id" class="col-sm-2 col-form-label">Jurusan ID</label>
						<div class="col-sm-10">
						     <select class="form-control" id="jurusan_id" name="jurusan_id">
						     	@foreach($jurusan as $key)
						     	<option value="{{ $key->id }}">{{ $key->id }} ( {{$key->nama}} )</option>
						     	@endforeach
						     </select>
						</div>
					</div>
					<div class="action-form">
						<a href="{{ url('siswa') }}" class="btn btn-success" style="margin-right: 5px;">Kembali</a>
						<button type="submit" class="btn btn-primary">Ubah Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection