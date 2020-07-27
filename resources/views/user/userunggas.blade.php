@extends('layouts.user')
@section('title','Unggas')
@section('content')
@section('judul','Unggas')
     
<div class="content">
  <div class="container-fluid">       
     <div class="row">            
      <div class="col-md-10 ml-auto mr-auto">
        <div class="card">
          <div class="card-header card-header-tabs card-header-rose">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">Menu:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#info" data-toggle="tab">
                      <i class="material-icons">info</i> Info
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pakan" data-toggle="tab">
                      <i class="material-icons">straighten</i> Pakan
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#jam" data-toggle="tab">
                      <i class="material-icons">query_builder</i> Jam
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#atur" data-toggle="tab">
                      <i class="material-icons">build</i> Atur
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="info">
                <div class="col-md-12">
                  <div class="table-responsive table-sales">                     
                    <table class="table">
                      <tbody>
                        @foreach($unggas as $ternak)
                        <tr>                          
                          <td>
                            <div class="flag">
                             <i class="material-icons">info</i>
                          </td>                          
                          <td>{{$ternak->keterangan}}</td>                          
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>                     
              </div>
                         
              <div class="tab-pane" id="pakan">
                <div class="col-md-12">
                  <div class="table-responsive table-sales">
                    <table class="table">                                          
                      <tbody>
                        @foreach ($device as $tinggi)
                      <tr> 
                        <td> 
                        Ketinggian minimal dan maksimal dari tempat penampungan pakan ayam adalah  {{ $tinggi->controlling->k_min }} cm dan {{ $tinggi->controlling->k_max }} cm                                                                     
                        </td>
                      </tr> 
                      @endforeach
                      </tbody>                                         
                    </table>
                  </div>
                </div>
              </div>   
                      
              <div class="tab-pane" id="jam">
                <div class="col-md-12">
                  <div class="table-responsive table-sales">
                    <table class="table">
                      <tbody>
                        @foreach ($device as $alat)
                        <tr>
                          <td>
                            Waktu pemberian pakan
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Hari dimulainya pemberian pakan dari tanggal {{ $alat->controlling->tanggal_mulai }}                                          
                          </td>
                          <td>
                            <div class="flag">
                             <i class="material-icons">query_builder</i>
                            </div>
                          </td>                          
                          <td>Jam</td>
                          <td class="text-right">{{ $alat->controlling->jam1 }}</td>
                          <td class="text-right">{{ $alat->controlling->jam2 }}</td>
                          <td class="text-right">{{ $alat->controlling->jam3 }}</td>
                          <td class="text-right">{{ $alat->controlling->jam4 }}</td>
                          <td class="text-right">{{ $alat->controlling->jam5 }}</td>
                        </tr> 
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>             
              </div>
              <div class="tab-pane" id="atur">
                <table class="table">
                  <tbody>
                    @foreach ($device as $atur)                   
                    <tr>                            
                      <div class="row">
                        <div class="col-12 text-center">
                          <button type="button" class="btn btn-rose pull-center" data-toggle="modal" data-target="#edit{{ $atur->controlling->id }}">Yuk Atur </button>
                        </div>
                      </div>
                      <div class="modal fade" id="edit{{ $atur->controlling->id }}" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Atur</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="{{ route('kontrol.update',$atur->controlling->id) }}" enctype="multipart/form-data">
                                  @csrf 
                                  @method('PATCH')
                                <div class="row">
                                  <label class="col-sm-2 col-form-label">Hari</label>
                                  <div class="col-sm-10">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                          <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" value="{{ $atur->controlling->tanggal_mulai }}" placeholder="mulai">
                                        </div>
                                      </div>                                     
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-sm-2 col-form-label">Jam</label>
                                  <div class="col-sm-10">
                                    <div class="row">                                     
                                      <div class="col-md-2">
                                        <div class="form-group bmd-form-group">
                                          <input type="times" class="form-control" name="jam1" id="jam1" value="{{ $atur->controlling->jam1 }}" placeholder="pertama">
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="form-group bmd-form-group">
                                          <input type="times" class="form-control" name="jam2" id="jam2" value="{{ $atur->controlling->jam2 }}" placeholder="kedua">
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="form-group bmd-form-group">
                                          <input type="times" class="form-control" name="jam3" id="jam3" value="{{ $atur->controlling->jam3 }}" placeholder="ketiga">
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="form-group bmd-form-group">
                                          <input type="times" class="form-control" name="jam4" id="jam4" value="{{ $atur->controlling->jam4 }}" placeholder="keempat">
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="form-group bmd-form-group">
                                          <input type="times" class="form-control" name="jam5" id="jam5" value="{{ $atur->controlling->jam5 }}" placeholder="kelima">
                                        </div>
                                      </div>                                      
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-sm-2 col-form-label">Ketinggian</label>
                                  <div class="col-sm-10">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                          <input type="text" class="form-control" name="k_min" id="k_min" value="{{ $atur->controlling->k_min }}" placeholder="minimal">
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                          <input type="text" class="form-control" name="k_max" id="k_max" value="{{ $atur->controlling->k_max }}" placeholder="maksimal">
                                        </div>
                                      </div>                                        
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-sm-2 col-form-label">Jumlah Unggas</label>
                                  <div class="col-sm-10">
                                    <div class="row">
                                      <div class="col-md-3">
                                        <div class="form-group bmd-form-group">
                                          <input type="text" class="form-control" name="jumlah_unggas" id="jumlah_unggas" value="{{ $atur->controlling->jumlah_unggas }}" placeholder="ekor">
                                        </div>
                                      </div>                                     
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" name="update" class="btn btn-rose pull-right">Update Data</button>   
                              </form>     
                            </div>                                                        
                          </div>                          
                        </div>
                      </div>
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