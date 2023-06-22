@extends('layouts.master')

@section('content')
<div class="container">
<h1>Edit Data</h1>

<form action="/santri/{{$santri->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$santri->nama}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kamar</label>
    <input type="text" name="no_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$santri->no_kamar}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kelas</label>
    <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$santri->kategori}}">
  </div>

    <select class="form-select" name="keterangan">
        <option value="">Pilih keterangan</option>
        <option value="A" @if ($santri->keterangan == "A") selected @endif>Alpa</option>
        <option value="I" @if ($santri->keterangan == "I") selected @endif>Izin</option>
        <option value="S" @if ($santri->keterangan == "S") selected @endif>Sakit</option>
        <option value="H" @if ($santri->keterangan == "H") selected @endif>Hadir</option>
    </select><br>
    <input type="submit" name="submit" class="btn btn-info" value="update">

</form>
</div>
