@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/santri/create">Add Santri</a>
        <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Kamar</th>
                <th>Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
            @foreach($santri as $s)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$s->nama}}</td>
                <td>{{$s->no_kamar}}</td>
                <td>{{$s->kategori}}</td>
                <td>{{$s->keterangan}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/santri/{{$s->id}}/edit">Edit</a>
                    <form action="/santri/{{$s->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-success" type="submit" value="Delete">
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-danger" href="home">Kembali</a>
    </div>
@endsection

