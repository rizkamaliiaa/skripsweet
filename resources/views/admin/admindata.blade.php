@extends('layouts.admin')
@section('title','Data Unggas')
@section('content')
@section('judul','Data Unggas')
     
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">         
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">info</i>
            </div>
            <h4 class="card-title ">Unggas</h4>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                <button type="button" class="btn btn-rose pull-right" data-toggle="modal" data-target="#tambahh">Add Unggas </button>
              </div>
            </div>

            <!-- Add Modal -->
            <div class="modal fade" id="tambahh" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{ route('data.store') }}" enctype="multipart/form-data">
                        @csrf 
                      <div class="row">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-10">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" type="text" name="nama" id="nama" required="true">
                          </div>
                        </div>
                      </div>                         
                      <div class="row">
                        <label class="col-sm-2 col-form-label" for="keterangan">Keterangan</label>
                        <div class="col-sm-10">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" type="text" name="keterangan" id="keterangan" required="true">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label" for="berat_pakan">Berat Pakan</label>
                        <div class="col-sm-10">
                          <div class="form-group bmd-form-group">
                            <input class="form-control" type="text" name="berat_pakan" id="berat_pakan" required="true">
                          </div>
                        </div>
                      </div>                                  
                      
                        <button type="submit" name="add" class="btn btn-rose pull-right">Add Data</button>
                      
                    </form>     
                  </div>                                                                
                </div>                          
              </div>
            </div>

            <div class="tab-content">
              <div class="tab-pane active" id="info">
                <table class="table">
                  <tbody>
                    @foreach($data as $row)
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>{{ $row->nama}} merupakan salah satu jenis dari ayam pedaging (broiler). {{ $row->nama}}  adalah ayam yang berumur {{ $row->keterangan}}</td>
                      <td class="td-actions text-left">
                        <button type="button" rel="tooltip" title="Show Task" class="btn btn-link btn-warning btn-just-icon edit" data-toggle="modal" data-target="#show{{ $row->device_id }}">
                          <i class="material-icons">dvr</i>
                        </button>

                        <!-- Show Modal -->
                        <div class="modal fade" id="show{{ $row->device_id }}" role="dialog">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">{{ $row->nama}}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <form method="get" enctype="multipart/form-data">                                 
                                  
                                  <div>
                                    {{ $row->keterangan}}
                                  </div> 
                                  <div>
                                    {{ $row->berat_pakan}}
                                  </div>  
                                </form>                                         
                              </div>                              
                            </div>
                          </div>
                        </div>

                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#edit{{ $row->id }}">
                          <i class="material-icons">edit</i>
                        </button>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="edit{{ $row->id }}" role="dialog">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="{{ route('data.update',$row->id) }}" enctype="multipart/form-data">
                                    @csrf 
                                    @method('PATCH')
                                  <div class="row">
                                    <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                                    <div class="col-sm-10">
                                      <div class="form-group bmd-form-group">
                                        <input class="form-control" type="text" name="nama" id="nama" value="{{ $row->nama }}" required="true">
                                      </div>
                                    </div>
                                  </div>                         
                                  <div class="row">
                                    <label class="col-sm-2 col-form-label" for="keterangan">Keterangan</label>
                                    <div class="col-sm-10">
                                      <div class="form-group bmd-form-group">
                                        <input class="form-control" type="text" name="keterangan" id="keterangan" value="{{ $row->keterangan }}" required="true">
                                      </div>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <label class="col-sm-2 col-form-label" for="berat_pakan">Berat Pakan</label>
                                    <div class="col-sm-10">
                                      <div class="form-group bmd-form-group">
                                        <input class="form-control" type="text" name="berat_pakan" id="berat_pakan" value="{{ $row->berat_pakan }}" required="true">
                                      </div>
                                    </div>
                                  </div>                             
                                  <button type="submit" name="add" class="btn btn-rose pull-right">Simpan</button>                                        
                                </form>     
                              </div>                                                                
                            </div>                          
                          </div>
                        </div>

                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" data-toggle="modal" data-target="#hapus{{ $row->id }}">
                          <i class="material-icons">close</i>
                        </button>

                        <!-- Hapus Modal -->
                        <div class="modal fade" id="hapus{{ $row->id }}" role="dialog">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Konfirmasi</h4>
                              </div>
                              <div class="modal-body">
                                <form action="{{ route('data.destroy',$row->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                  <div>
                                    Apakah Anda yakin menghapus data {{ $row->nama }}?
                                  </div>
                                    <button type="submit" name="delete" class="btn btn-rose pull-right">Hapus Data</button>                                    
                                </form>                                                              
                              </div>                            
                            </div>
                          </div>
                        </div>
                      </td>
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
</div>

      @endsection