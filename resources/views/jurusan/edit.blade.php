@extends('layouts.app')

@section('content')
	<div class="container page" style="padding-top: 70px;">
		<div class="card">
			<div class="card-header"><i class="fab fa-grav"></i> Edit Jurusan</div>
			<div class="card-body">
				@foreach($jurusan as $key)
				<form method="POST" action="{{ url('jurusan/update/'.$key->id) }}" class="form">
					@csrf
					<div class="form-group row">
					    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{$key->nama}}">
						</div>
					</div>
					<div class="form-group row">
					    <label for="kajur" class="col-sm-2 col-form-label">Kajur</label>
						<div class="col-sm-10">
						     <input type="text" class="form-control" id="kajur" placeholder="Kajur" name="kajur" value="{{$key->kajur}}">
						</div>
					</div>

					<div class="action-form">
						<a href="{{ url('jurusan') }}" class="btn btn-success" style="margin-right: 5px;">Kembali</a>
						<button type="submit" class="btn btn-primary">Ubah Data</button>
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
@endsection