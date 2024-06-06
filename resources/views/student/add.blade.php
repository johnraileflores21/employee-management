@extends('layouts.app')

@section('content')
<div class="container d-flex">
    <div class="container" style="width: 34%"> <img src="{{ asset('/images/Logo.jpg') }}" alt="image" style="width: 70%; height: auto; margin: 50px 0px 0px 50px;" class="rounded-circle w-30%"></div>
<div class="card card-primary" style="margin-top: 50px; width: 65%;">
              <div class="card-header ">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('student.store') }}">
                 @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label>First Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Firstname">
                  </div>
                  <div class="form-group">
                  <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                  <label>Admin</label>
                    <input type="text" class="form-control" name="admin" value="{{ old('admin') }}" placeholder="Enter Admin">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Register">
                </div>
              </form>
            </div>
            
            </div>
    <!--<div class="form-area mt-5">
        <form method="POST" action="{{ route('student.store') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Firstname">
                </div>
                <div class="col-md-6 mt-3">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                </div>
                <div class="col-md-6 mt-3">
                    <label>Admin</label>
                    <input type="text" class="form-control" name="admin" value="{{ old('admin') }}" placeholder="Enter Admin">
                </div>
                <div class="col-md-6 mt-3 t">
                    <input type="submit" class="btn btn-primary" value="Register">
                </div>
            </div>
        </form>
    </div> -->
@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush