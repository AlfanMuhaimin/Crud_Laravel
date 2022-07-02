@extends('layout.master')

@section('content')
    <div class="container">
        <h1><p style="text-align:center">TABEL MAHASISWA</p></h1>
        <a class="btn btn-primary" href="/mahasiswa/create">+ Tambah List</a>
        <table class="table table-success table-striped">
            <tr>
                <th>NOMOR</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>JURUSAN</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>OPSI</th>
            </tr>
            @foreach($mahasiswa as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->nama}}</td>
                    <td>{{$m->nim}}</td>
                    <td>{{$m->jurusan}}</td>
                    <td>{{$m->jenis_kelamin}}</td>
                    <td>{{$m->alamat}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                            <form action="/mahasiswa/{{$m->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Hapus">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection