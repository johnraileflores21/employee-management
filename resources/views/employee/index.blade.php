@extends('layouts.app')

@section('content')

    <div class="container">
        <!--<h3 align="center" class="">Employee Management</h3> -->
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <!-- @if ($errors->any())
            <div>
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif 
           <div class="form-area mt-5">
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="Enter Firstname">
                            @if ($errors->has('firstname'))
                                <ul class="text-danger mt-2"><li>{{ $errors->first('firstname') }}</li></ul>
                            @endif
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Employee Last Name</label>
                            <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Enter Lastname">
                            @if ($errors->has('firstname'))
                                <ul class="text-danger mt-2"><li>{{ $errors->first('lastname') }}</li></ul>
                            @endif
                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Birthday</label>
                            <input type="date" class="form-control" name="DOB" value="{{ old('DOB') }}">
                            @if ($errors->has('firstname'))
                                <ul class="text-danger mt-2"><li>{{ $errors->first('DOB') }}</li></ul>
                            @endif

                        </div>
                        <div class="col-md-6 mt-3">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Enter Phone Number">
                            @if ($errors->has('firstname'))
                                <ul class="text-danger mt-2"><li>{{ $errors->first('phone') }}</li></ul>
                            @endif
                        </div>
                        <div class="col-md-6 mt-3 t">
                            <input type="submit" class="btn btn-primary" value="Register">      
                        </div>
                    </div>
                </form>
            </div> -->
            <h3 align="center" class="pt-5">Student List</h3>
            <a href="{{ url('employee/create') }}" class="btn btn-info btn-sm mb-3 ml-2 pt-2 pb-2 pl-4 pr-4">Add</a>
            <div class="row m-auto">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student List</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead><tr>
                    <th scope="col" class="pl-5">#</th>
                        <th scope="col" class="pl-5">ID</th>
                        <th scope="col" class="pl-5">Name</th>
                        <th scope="col" class="pl-5">Email</th>
                        
                        <th scope="col" class="pl-5">Admin</th>
                        <th scope="col" class="pl-5">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($employers as $employee)
                        <tr >
                        <td class="pl-5">{{ $employee->id }}</td>
                        <td class="pl-5">{{ $employee->id }}</td>
                            <td class="pl-5">{{ $employee->name }}</td>
                            <td class="pl-5">{{ $employee->email }}</td>
                            <td class="pl-5">{{ $employee->DOB }}</td>
                            <td>
                            <a href="{{ url('employees/' . $employee->id . '/edit') }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ url('employees/' . $employee->id . '/delete') }}" class="btn btn-danger btn-sm">Delete</a>
                            </form>
                            </td>

                          </tr>

                        @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!--<div class="container p-3">  
          <h3 align="center" class="">Employee List</h3>
                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col" class="border border-dark">#</th>
                        <th scope="col" class="border border-dark">ID</th>
                        <th scope="col" class="border border-dark">Name</th>
                        <th scope="col" class="border border-dark">Email</th>
                        <th scope="col" class="border border-dark">Admin</th>
                        <th scope="col" class="border border-dark">Action</th>
                      </tr>
                    </thead>
                    <tbody class="">

                    @foreach($employers as $employee)
                        <tr>
                        <td class="border border-dark border-top">{{ $employee->id }}</td>
                        <td class="border border-dark">{{ $employee->id }}</td>
                            <td class="border border-dark">{{ $employee->firstname }}</td>
                            <td class="border border-dark">{{ $employee->lastname }}</td>
                            <td class="border border-dark">{{ $employee->DOB }}</td>
                            <td class="border border-dark">
                            <a href="{{ url('employees/' . $employee->id . '/edit') }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ url('employees/' . $employee->id . '/delete') }}" class="btn btn-danger btn-sm">Delete</a>
                            </form>
                            </td>

                          </tr>

                        @endforeach
                    </tbody>
                  </table>
            </div> -->
            
        </div>  
          </div>
        </div>
    </div>
</div>

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