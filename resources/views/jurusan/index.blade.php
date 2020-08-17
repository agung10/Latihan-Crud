@extends ('layouts.app')

@section('content')
	<div class="container page">
		<div class="header" style="display: flex;justify-content: space-between; align-items: center; margin: 20px 0;">
			<div class="header-indicator">
				<p class="h5"><i class="fab fa-grav"></i> Halaman Jurusan</p>
			</div>
			<a href="{{ url('jurusan/add') }}" class="btn btn-success">Tambah Baru</a>
		</div>
		<div class="wrap-table">
		<table class="table table-striped table-bordered">
	      <thead class="thead-dark">
	        <tr>
	            <th scope="col" style="text-align: center;">Id</th>
	            <th scope="col" style="text-align: center;">Nama</th>
	            <th scope="col" style="text-align: center;">Jumlah Siswa</th>
	            <th scope="col" style="text-align: center;">Kajur</th>
	            <th scope="col" style="text-align: center;">Created at</th>
	            <th scope="col" style="text-align: center;">Updated at</th>
	            <th scope="col" style="text-align: center;">Action</th>
	        </tr>
	      </thead>
	        <tbody>
	          @foreach($jurusan as $row)
	          <tr>
	            <td style="text-align: center;">{{$row->id}}</td>
	            <td>{{$row->nama}}</td>
	            <td style="text-align: center;">{{$row->jumlah_siswa}}</td>
	            <td>{{$row->kajur}}</td>
	            <td style="text-align: center;">{{$row->created_at}}</td>
	            <td style="text-align: center;">{{$row->updated_at}}</td>
	            <td style="text-align: center;">
	              <a href="{{url('jurusan/edit/'.$row->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
	              <a onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan {{$row->nama}}?')" href="{{url('jurusan/delete/'.$row->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
	            </td>
	          </tr>
	          @endforeach
	        </tbody>
	    </table>
	    </div>
	</div>
@endsection