@extends('layouts.user')
@section('title','Dashboard')
@section('content')
@section('judul','Dashboard')

<div class="content">
  <div class="container-fluid">
    <div class="row">
    	
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="material-icons">straighten</i>
            </div>
            <p class="card-category">Sisa Pakan</p>
            <h3 class="card-title" id="sisa_pakan" >
              {{-- <small>%</small> --}}
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger"></i>
              <a href=""></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">access_alarm</i>
            </div>
            <p class="card-category">Jam Makan</p>
            <h3 class="card-title"></h3>
            
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons"></i>
            </div>
          </div>
        </div>
      </div>
      
     {{--  <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="material-icons">wb_sunny</i>
            </div>
            <p class="card-category">Suhu Kandang</p>
            <h3 class="card-title" id="suhu"></h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons"></i> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="material-icons">square_foot</i>
            </div>
            <p class="card-category">Berat Unggas</p>
            <h3 class="card-title"></h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons"></i> 
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    
  </div>
</div>
@endsection

@push('js')
<script> 
$(document).ready(function () {
  function monitoring () {
    $.get('{{ route('monitoring') }}', function (ultrasonik) {
      console.log(ultrasonik.data);
      $('#sisa_pakan').html(ultrasonik.data.monitorings.ketinggian + 'cm');
    });
  }
  setInterval(monitoring, 3000);
});
</script>
@endpush