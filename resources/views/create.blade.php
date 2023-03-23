@extends('layout.section')

@section('section')
<div class="e-tabs mb-3 px-3">
  <ul class="nav nav-tabs">
      <li class="nav-item"><a class="nav-link" href="/">Data</a></li>
      <li class="nav-item active"><a class="nav-link active" href="/create">Tambah data</a></li>
  </ul>
</div>
<form action="/store" method="POST">
  @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama" required>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" required>
  </div>
  <div class="mb-3">
    <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
  </div>
  <div class="mb-3">
    <label for="riwayat_sakit" class="form-label">Riwayat sakit</label>
    <input type="text" class="form-control" name="riwayat_sakit" id="riwayat_sakit" required>
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <input type="text" class="form-control" name="status" id="status" required>
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
@endsection
