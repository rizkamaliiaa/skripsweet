@extends('layouts.admin')
@section('title','Users')
@section('judul','Users')

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
            <h4 class="card-title ">Tabel User</h4>
          </div>

          <div class="card-body">
            @if($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{$message}}</p>
            </div>
            @endif
            <div class="row">
              <div class="col-12 text-right">
                <button type="button" class="btn btn-rose pull-right" data-toggle="modal" data-target="#tambah">Add user </button>

              </div>
            </div>

            <!-- Add Modal -->
            <div class="modal fade" id="tambah" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Users</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                      @csrf                            
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="nama_depan" class="bmd-label-floating">Nama Depan</label>
                              <input type="text" class="form-control" name="nama_depan" required="true" aria-required="true"="true" aria-required="true">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="nama_belakang" class="bmd-label-floating">Nama Belakang</label>
                              <input type="text" class="form-control" name="nama_belakang" value="" required="true" aria-required="true">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="email" class="bmd-label-floating">Email</label>
                              <input type="email" class="form-control" name="email" value="" required="true" aria-required="true">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="no_hp" class="bmd-label-floating">No HP</label>
                              <input type="text" class="form-control" name="no_hp" value="" required="true" aria-required="true">
                            </div>
                          </div>                        
                        </div>
                        <div class="row">
                          <div class="col-md-12">                     
                            <div class="form-group">
                              <label for="alamat" class="bmd-label-floating">Alamat</label>
                              <input type="text" class="form-control" name="alamat" value="" required="true" aria-required="true">
                            </div>                      
                          </div>
                        </div>
                        <button type="submit" id="add" name="add" class="btn btn-rose pull-right">Add User</button>                       
                    </form>       
                  </div>                          
                </div>
              </div>
            </div>
            <!-- end  -->

            <table class="table table-hover" id="userTable" style="width:100%">
              <thead>
                <tr>
                  <th style="width: 7%">No</th>
                  <th style="width: 20%">Nama</th>
                  <th style="width: 10%">Level</th>
                  <th style="width: 20%">Email</th>
                  <th style="width: 20%">No HP</th>
                  <th style="width: 25%">Alamat</th>
                  <th style="width: 5%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @php
                $no = 1;
              @endphp
              <!-- if(count($users) != 0) -->
                @foreach ($users as $user)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{ $user->nama_depan }} {{ $user->nama_belakang }}</td>
                  <td>{{ $user->role()->first()->nama }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->no_hp }}</td>
                  <td>{{ $user->alamat }}</td>
                  <td>
                    <div class="btn-group">
                      <button title="Edit" class="btn btn-primary btn-link btn-sm" data-toggle="modal" data-target="#edit_user" onclick="getDataEditUser({{$user->id}})"><i class="material-icons">edit</i>
                      </button>

                      <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" data-toggle="modal" data-target="#hapus{{ $user->id }}">
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


<!-- Edit modal -->
<div class="modal fade" id="edit_user" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Users</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('update-user') }}" enctype="multipart/form-data">
          @csrf 
          <!-- @method('PATCH')  -->

            <input type="hidden" id="id" name="id">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nama_depan" class="bmd-label-floating">Nama Depan</label>
                  <input type="text" class="form-control" id="nama_depan" name="nama_depan" required="true" aria-required="true">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nama_belakang" class="bmd-label-floating">Nama Belakang</label>
                  <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" required="true" aria-required="true">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="email" class="bmd-label-floating">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required="true" aria-required="true">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="no_hp" class="bmd-label-floating">No HP</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" required="true" aria-required="true">
                </div>
              </div>                        
            </div>
            <div class="row">
              <div class="col-md-12">                     
                <div class="form-group">
                  <label for="alamat" class="bmd-label-floating">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required="true" aria-required="true">
                </div>                      
              </div>
            </div> 
            <button type="submit" name="update" class="btn btn-rose pull-right">Update User</button>
        </form>       
      </div>                          
    </div>
  </div>
</div>
<!-- end  -->

<!-- Hapus Modal -->
<div class="modal fade" id="hapus{{ $user->id }}" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Konfirmasi</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('users.destroy',$user->id) }}" method="post">
            @csrf
            @method('delete')
          <div>
            Apakah Anda yakin menghapus data {{ $user->nama_depan }} {{ $user->nama_belakang }}?
          </div>
            <button type="submit" name="delete" class="btn btn-rose pull-right">Hapus Data</button>                                    
        </form>                                                              
      </div>                            
    </div>
  </div>
</div>
<!-- end  -->

<!-- /edit modal -->
<script>
    var url_id = '{{ url('getuser')}}';
    function getDataEditUser(id){
        // console.log(id)
        var url_user = url_id + '/' + id 
        // console.log(url_subkriteria)
        $.get(url_user, function(data){
            $('#id').val(data.id);
            $('#nama_depan').val(data.nama_depan);
            $('#nama_belakang').val(data.nama_belakang);
            $('#email').val(data.email);
            $('#no_hp').val(data.no_hp);
            $('#kode_alat').val(data.kode_alat);
            $('#alamat').val(data.alamat);
        });
    }

</script>
@endsection

