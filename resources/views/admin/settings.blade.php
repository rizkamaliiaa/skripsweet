@extends('layouts.admin')
@section('title','Settingss')
@section('content')
@section('judul','Settings')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="{{route('password.update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
          {{csrf_field()}}
            <div class="card">
              <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                <i class="material-icons">lock</i>
                </div>
                <h4 class="card-title">Change password</h4>
                @if($message = Session::get('success'))
                  <div class="alert alert-success">
                    <p>{{$message}}</p>
                  </div>
                @endif
              </div>

              <div class="card-body ">
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="current_password">Current Password</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" input="" type="password" name="current_password" id="current_password" value="" required="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="password">New Password</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="password" id="password" type="password">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="password_confirmation">Confirm New Password</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="password_confirmation" id="password_confirmation" type="password">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose pull-right">Change password<div class="ripple-container"></div></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>   
  </div>
@endsection
