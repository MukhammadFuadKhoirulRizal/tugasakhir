@extends('layouts.master')

@section('content')

<div class="container">
<h1>Create Santri</h1>
<form action="/santri/store" method="POST">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kamar</label>
    <input type="text" name="no_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kelas</label>
    <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    @csrf
    <select class="form-select" name="keterangan">
        <option value="">Pilih keterangan</option>
        <option value="A">Alpa</option>
        <option value="I">Izin</option>
        <option value="S">Sakit</option>
        <option value="H">Hadir</option>
    </select><br>
    <input type="submit" name="submit" class="btn btn-info" value="Save">
</form>
</div>
@endsection
