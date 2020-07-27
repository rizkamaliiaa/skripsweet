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
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons text-danger"></i>
              <span id="hasil"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="material-icons">access_alarm</i>
            </div>
            <p class="card-category">Jam Makan</p>
            <h3 class="card-title" id="jam"></h3>
            
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons"></i>
              <span id="status"></span>
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
        var tinggi = ultrasonik.data[0].monitorings.ketinggian;
          if (tinggi >= 40 && tinggi <= 60){
            ketinggian=parseInt(tinggi/60*100);
            $('#sisa_pakan').addClass('text-success')
          }else if (tinggi >= 20 && tinggi <= 39) {
            ketinggian=parseInt(tinggi/60*100);
            $('#sisa_pakan').addClass('text-warning')
          }else{
            ketinggian= parseInt(tinggi/60*100);
            $('#sisa_pakan').addClass('text-danger')
          }
          $('#sisa_pakan').html(ketinggian+'%');
      
      
    });   
 

    $.get('{{ route('ambilketinggian') }}', function (hasil){
      $("#hasil").html(hasil);
      console.log(hasil);
    });
  }
  setInterval(monitoring, 3000);

  function jam_sekarang () {
    $.get('{{ route('jam_sekarang') }}', function (jam){
      console.log(jam);
      $('#jam').html(jam);
    });

    $.get('{{ route('controlling') }}', function (status_motor){
      console.log(status_motor.data);
      $('#status').html(status_motor.data.controlling.status);
    });
  }
  setInterval(jam_sekarang, 1000);

});

// $(document).ready(function () {
//   function monitoring () {
    
//     $.get('{{ route('monitoring') }}', function (ultrasonik) {
//       // console.log(ultrasonik).data;
//       let data = ultrasonik.data;
//       // console.log(data[0])
//       $('#sisa_pakan').html(data[0].kode_alat);
//       $('#sisa_pakan2').html(data[1].kode_alat);

//       var nama_alat1 = data[0].kode_alat;
//       var nama_alat2 = data[1].kode_alat;
//       var alat1 = data[0].monitorings['ketinggian'];
//       var alat2 = data[1].monitorings['ketinggian'];

//       if (alat1 >= 40 && alat1 <= 60){
//         ketinggian1=parseInt(alat1/60*100);
//         // console.log(ketinggian)
//         $('#sisa_pakan').addClass('text-success')
//       }else if (alat1 >= 20 && alat1 <= 39) {
//         ketinggian1=parseInt(alat1/60*100);
//         // console.log(ketinggian)
//         $('#sisa_pakan').addClass('text-warning')
//       }else{
//         ketinggian1= parseInt(alat1/60*100);
//         // console.log(ketinggian)
//         $('#sisa_pakan').addClass('text-danger')
//       }
      
//       $('#sisa_pakan').html(nama_alat1 +': '+ alat1+'%');

//       if (alat2 >= 40 && alat2 <= 60){
//         ketinggian12=parseInt(alat2/60*100);
//         // console.log(ketinggian)
//         $('#sisa_pakan2').addClass('text-success')
//       }else if (alat2 >= 20 && alat2 <= 39) {
//         ketinggian12=parseInt(alat2/60*100);
//         // console.log(ketinggian)
//         $('#sisa_pakan2').addClass('text-warning')
//       }else{
//         ketinggian12= parseInt(alat2/60*100);
//         // console.log(ketinggian)
//         $('#sisa_pakan2').addClass('text-danger')
//       }
//       $('#sisa_pakan2').html(nama_alat2 +': '+ alat2+'%');

      
//     });   

//   }setInterval(monitoring, 2000);
  
//   function jam_sekarang () {
//     $.get('{{ route('jam_sekarang') }}', function (jam){
//       // console.log(jam);
//       $('#jam').html(jam);

      
//       $('#jam1').html(jam);
//     });
//   }  setInterval(jam_sekarang, 1000);

// });

</script>

@endpush