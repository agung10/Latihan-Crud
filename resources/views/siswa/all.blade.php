@extends('layouts.app')

@section('content')

	<div class="container page">
		<div class="header" style="display: flex;justify-content: space-between; align-items: center; margin: 20px 0;">
			<div class="header-indicator">
				<p class="h5"><i class="fas fa-graduation-cap"></i> Halaman Siswa</p>
			</div>
			<a href="{{url('siswa/add')}} " class="btn btn-success">Tambah Data</a>
		</div>
		<div class="table-responsive">
		<div class="text-center">
		<table style="width: 100%" class="table table-striped table-bordered">
			<thead class="thead-dark">
				<tr>
	            <th scope="col" style="text-align: center;">Id</th>
	            <th scope="col" style="text-align: center;">Nama Siswa</th>
	            <th scope="col" style="text-align: center;">Kelas Id</th>
	            <th scope="col" style="text-align: center;">Jurusan Id</th>
	            <th scope="col" style="text-align: center;">Action</th>
	        </tr>
			</thead>
			<tbody>
				@foreach($siswa as $row)
					<tr>
						<td style="text-align: center;">{{$row->id}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->kelas_id}}. <a href="{{url('kelas')}}">Lihat Kelas</a> </td>
						<td>{{$row->jurusan_id}}. <a href="{{url('jurusan')}}">Lihat jurusan</a> </td>
						<td style="text-align: center;">
							<a href="{{url('siswa/edit/'.$row->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
	              			<a onclick="return confirm('Apakah Anda yakin ingin menghapus siswa {{$row->nama}}?')" href="{{url('siswa/min_count_jurusan/'.$row->id.'/'.$row->jurusan_id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>	
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection