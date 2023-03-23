@extends('layout.section')

@section('section')

<div class="card-header">
  <div class="h4">
    Edit Data
  </div>
</div>
<div class="card-body">

  <form action="/store" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" id="nama" required>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}" id="alamat" required>
    </div>
    <div class="mb-3">
      <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
      <input type="date" class="form-control" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" id="tanggal_lahir" required>
    </div>
    <div class="mb-3">
      <label for="riwayat_sakit" class="form-label">Riwayat sakit</label>
      <input type="text" class="form-control" name="riwayat_sakit" value="{{ $data->riwayat_sakit }}" id="riwayat_sakit" required>
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <input type="text" class="form-control" name="status" value="{{ $data->status }}" id="status" required>
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
  </form>
</div>
@endsection
