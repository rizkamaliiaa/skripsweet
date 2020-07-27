@extends('layouts.admin')
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
                    <i class="material-icons">people_alt</i>
                  </div>
                  <p class="card-category">Admin</p>
                  <h3 class="card-title">
                  {{ $data['admin'] }}
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>
                    <a href="{{url('adminn')}}">Lihat Data...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people_alt</i>
                  </div>
                  <p class="card-category">Users</p>
                  <h3 class="card-title">      
                  {{ $data['user'] }}             
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> 
                    <a href="{{url('users')}}">Lihat Data...</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">build_circle</i>
                  </div>
                  <p class="card-category">Alat</p>
                  <h3 class="card-title">      
                  {{ $device }}             
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> 
                    <a href="{{url('device')}}">Lihat Data...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection