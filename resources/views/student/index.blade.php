@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center" class="pt-5">Student List</h3>
        <a href="{{ route('student.create') }}" class="btn btn-info btn-sm mb-3 ml-2 pt-2 pb-2 pl-4 pr-4">Add</a>
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
                            <thead>
                                <tr>
                                    <th scope="col" class="pl-5">#</th>
                                    <th scope="col" class="pl-5">Id</th>
                                    <th scope="col" class="pl-5">Name</th>
                                    <th scope="col" class="pl-5">Email</th>
                                    <th scope="col" class="pl-5">Admin</th>
                                    <th scope="col" class="pl-5">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td class="pl-5">{{ $student->id }}</td>
                                    <td class="pl-5">{{ $student->id }}</td>
                                    <td class="pl-5">{{ $student->name }}</td>
                                    <td class="pl-5">{{ $student->email }}</td>
                                    <td class="pl-5">{{ $student->admin }}</td>
                                    <td>
                                        <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ route('student.destroy', $student->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection