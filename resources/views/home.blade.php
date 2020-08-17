@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #42f483; color: #fff; font-size: 15px;"><i class="fas fa-home"></i> Halaman Utama</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <center>
                        <a href="siswa" type="submit" class="btn btn-primary">Siswa</a>
                        <a href="kelas" type="submit" class="btn btn-primary">Kelas</a>
                        <a href="jurusan" type="submit" class="btn btn-primary">Jurusan</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
