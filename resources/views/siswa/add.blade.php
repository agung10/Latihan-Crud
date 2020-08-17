@extends('layouts.app')

@section('content')
	<div class="container page" style="padding-top: 70px;">
		<div class="card">
			<div class="card-header"><i class="fas fa-graduation-cap"></i> Tambah Siswa Baru</div>
				<div class="card-body">
					<form method="POST" action="{{url('siswa/save')}}">
						{{csrf_field()}}
						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama">
							</div>
						</div>
							
						<div class="form-group row">
							<label for="kelas_id" class="col-sm-2 col-form-label">Kelas Id</label>
							<div class="col-sm-10">
								<select class="form-control" id="kelas_id" name="kelas_id">
									@foreach($kelas as $key)
									<option value="{{$key->id}}">{{$key->id}} ( {{$key->nama}} )</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label">Jurusan Id</label>
							<div class="col-sm-10">
								<select class="form-control" id="jurusan_id" name="jurusan_id">
									@foreach($jurusan as $key)
									<option value="{{$key->id}}">{{$key->id}} ({{$key->nama}})</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="action-form">
							<a href="{{ url('siswa') }}" class="btn btn-success" style="margin-right: 5px;">Kembali</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection