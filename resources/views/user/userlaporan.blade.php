@extends('layouts.user')
@section('title','Laporan')
@section('content')
@section('judul','Laporan')
     
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title ">Laporan</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class=" text-primary">
                  <th>No</th>
                  <th>Kode Alat</th>
                  <th>Unggas</th>
                  <th>Jumlah</th>
                  <th>Tanggal Mulai</th>
                  <th>Jam</th>
                  <th>Status</th>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                @foreach ($lapor as $lapor)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $lapor->kode_alat }}</td>
                    <td>{{ $lapor->unggas }}</td>
                    <td>{{ $lapor->controlling()->first()->jumlah_unggas }}</td>
                    <td>{{ $lapor->controlling()->first()->tanggal_mulai }}</td>
                    <td>{{ $lapor->controlling()->first()->jam1 }}</td>
                    
                    <td>{{ $lapor->controlling()->first()->status }}</td>
                                     
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection