@extends('layout.master')

@section('content')
    <div class="container">
    <h1><p style="text-align:center">EDIT DATA</p></h1>

    <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
        @method('put')
        @csrf
        <form action="/mahasiswa/store" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nama}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nim</label>
                <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nim}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->jurusan}}">
            </div>
           
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($mahasiswa->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                <option value="P" @if($mahasiswa->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select><br>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="10">{{$mahasiswa->alamat}}</textarea><br>
            <input type="submit" name="submit" class="btn btn-info" value="Perbarui">
    </form>
    </div>
   
@endsection