@extends('templite.layout')

@section('isi')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-12">
                    <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Laporan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataku" class="display table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Deskripsi Pekerjaan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_laporan as $data)
                                                    <tr>
                                                        <td>{{ $data->tanggal }}</td>
                                                        <td>{{ $data->judul_pekerjaan }}</td>
                                                        <td>{{ $data->deskripsi_pekerjaan }}</td>
                                                    </tr>
                                                 @endforeach 
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Deskripsi Pekerjaan</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
@endsection