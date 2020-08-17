@extends('layouts.app')

@section('content')
	<div class="container page" style="padding-top: 70px">
		<div class="card">
			<div class="card-header"><i class="fab fa-grav"></i> Tambah Jurusan Baru</div>
			<div class="card-body">
				<form method="POST" action="{{ url('jurusan/save') }}" class="form">
					@csrf
					<div class="form-group row">
					    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
						</div>
					</div>
					<div class="form-group row">
					    <label for="kajur" class="col-sm-2 col-form-label">Kajur</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="kajur" placeholder="Masukan Kajur" name="kajur">
						</div>
					</div>

					<div class="action-form">
						<a href="{{ url('jurusan') }}" class="btn btn-success" style="margin-right: 5px;">Kembali</a>
						<button type="submit" class="btn btn-primary">Tambah Baru</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection