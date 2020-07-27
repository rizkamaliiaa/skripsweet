@extends('layouts.admin')
@section('title','Device')
@section('judul','Device')

@section('content')   
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title ">Tabel Alat</h4>
          </div>

          <div class="card-body">
            @if($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{$message}}</p>
            </div>
            @endif
            <div class="row">
              <div class="col-12 text-right">
                <button type="button" class="btn btn-rose pull-right" data-toggle="modal" data-target="#tambah">Tambah Alat </button>

              </div>
            </div>
            <!-- Add Modal -->
            <div class="modal fade" id="tambah" role="dialog">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Add Device</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{ route('device.store') }}" enctype="multipart/form-data">
                        @csrf                            
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">                                  
                              <label for="nama_depan" class="bmd-label-floating">Nama</label>
                              <select type="text" class="form-control" name="user_id" required="true" aria-required="true">
                                <option value="">Pilih Nama</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{ $user->nama_depan}} {{ $user->nama_belakang}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div> 
                        </div>                           
                        <div class="row">                    
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="" class="bmd-label-floating">Ternak</label>
                              <input type="text" class="form-control" name="unggas" value="" required="true" aria-required="true"> 
                            </div>
                          </div>
                        </div>
                        <div class="row">                                         
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="bmd-label-floating">Kode Alat</label>
                                    <input type="text" class="form-control" name="kode_alat" value="" required="true" aria-required="true">
                                </div>
                            </div> 
                        </div>                           
                        <button type="submit" id="add" name="add" class="btn btn-rose pull-right">Tambah Alat</button>                            
                    </form>       
                  </div>                          
                </div>
              </div>
            </div>
            <!-- end  -->
            
            <table class="table table-hover" id="deviceTable" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No Hp</th>
                  <th>Kode Alat</th>
                  <th>Ternak</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @php
                $no = 1;
              @endphp
                @foreach ($device as $alat)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{ $alat->user->nama_depan }} {{ $alat->user->nama_belakang }}</td>
                  <td>{{ $alat->user->no_hp }}</td>
                  <td>{{ $alat->kode_alat }}</td>
                  <td>{{ $alat->unggas }}</td>
                  <td>
                    <div class="btn-group">
                      {{-- <button title="Edit" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#edit_device" onclick="getDataEditDevice({{$alat->id}})">
                        <i class="material-icons">edit</i>
                      </button> --}}
                      <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" data-toggle="modal" data-target="#hapus{{ $alat->id }}">
                        <i class="material-icons">close</i>
                      </button>

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

{{-- <!-- Edit modal -->
<div class="modal fade" id="edit_device" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Device</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('update-device') }}" enctype="multipart/form-data">
          @csrf 
          <!-- @method('PATCH')  -->

            <input type="hidden" id="id" name="id">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="unggas" class="bmd-label-floating">Ternak</label>
                  <select type="text" class="form-control" id="unggas" name="unggas" required="true" aria-required="true">
                    <option value="">Pilih Ternak</option>
                    
                    <option></option>
                   
                  </select>
                </div>
              </div>
            </div>  
              <button type="submit" name="update" class="btn btn-rose pull-right">Update User</button>
        </form>       
      </div>                          
    </div>
  </div>
</div>
<!-- end  --> --}}

<!-- Hapus Modal -->
<div class="modal fade" id="hapus{{ $alat->id }}" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Konfirmasi</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('device.destroy',$alat->id) }}" method="post">
            @csrf
            @method('delete')
          <div>
            Apakah Anda yakin menghapus data alat {{ $alat->kode_alat }} dari {{ $alat->user->nama_depan }} {{ $alat->user->nama_belakang }}?
          </div>
            <button type="submit" name="delete" class="btn btn-rose pull-right">Hapus Data</button>                                    
        </form>                                                              
      </div>                            
    </div>
  </div>
</div>
<!-- end  -->

{{-- <!-- /edit modal -->
<script>
    var url_id = '{{ url('getdevice')}}';
    function getDataEditDevice(id){
        // console.log(id)
        var url_user = url_id + '/' + id 
        // console.log(url_subkriteria)
        $.get(url_user, function(data){
            $('#id').val(data.id);
            $('#unggas').val(data.unggas);
        });
    } --}}

</script>
@endsection

