@extends('layout.section')

@section('section')
    <div class="container">
        <div class="col">
            <div class="e-tabs mb-3 px-3">
                <ul class="nav nav-tabs">
                    <li class="nav-item active"><a class="nav-link active" href="/">Data</a></li>
                    <li class="nav-item "><a class="nav-link" href="/create">Tambah data</a></li>
                </ul>
            </div>

            <div class="row flex-lg-nowrap">
                <div class="col mb-3">
                    <div class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mr-2"><small class="px-1">Data Pasien</small></h4>
                                <h6 class="mr-2 text-muted"><small class="px-1">Rumah Sakit Dr.Soetomo</small></h6>
                            </div>
                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th class="max-width">Nama</th>
                                                <th class="max-width">Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Riwayat Sakit</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $data)
                                                <tr>
                                                    <td class="text-nowrap align-middle">{{ $no++ }}</td>
                                                    <td class="text-nowrap align-middle">{{ $data['nama'] }}</td>
                                                    <td class="text-nowrap align-middle">{{ $data['tanggal_lahir'] }}
                                                    </td>
                                                    <td class="text-nowrap align-middle">{{ $data['alamat'] }}
                                                    </td>
                                                    <td class="text-center align-middle">{{ $data['riwayat_sakit'] }}</td>
                                                    <td class="text-center align-middle">{{ $data['status'] }}</td>
                                                    <td class="text-center align-middle">
                                                        <div class="btn-group  align-top">
                                                            <a class="btn btn-outline-secondary"
                                                                href="{{ route('edit', ['data' => $data]) }}">Edit</a>


                                                            <a class="btn btn-outline-secondary" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#delete-{{ $data->id }}"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="delete-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <p>Are you sure you want to delete this data?</p>
                                
                                                                <form action="{{ route('delete', ['data' => $data]) }}" method="post">
                                                                    @csrf
                                                                    <input class="btn btn-danger" type="submit" value="Delete">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
