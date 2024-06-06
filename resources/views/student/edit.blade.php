@extends('layouts.app')

@section('content')
    <div class="container bg bg-primary">
        <h3 align="center" class="">Student Management</h3>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-area">
                    <form method="POST" action="{{ route('student.update', $student->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <label>Student Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                            </div>
                            <div class="col-md-6">
                                <label>Student Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $student->email }}">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label>Admin</label>
                                <input type="text" class="form-control" name="admin" value="{{ $student->admin }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </div>
                    </form>
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
            background-color:#b3e5fc;
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