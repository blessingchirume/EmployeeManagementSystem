@extends('employee.app')

@section('content')
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Employee &raquo; Listing</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        <div class="container-fluid">
            @include('partials.alert')
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <a href="{{ route('employee.create') }}" type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                Generate
            </a>
        </div>
        <div class="card-body">
            <table id="employeeTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Designation</th>

                        <th>Created</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->surname}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>{{$employee->designation}}</td>
                        <td>{{$employee->created_at}}</td>
                        <td>{{$employee->updated_at}}</td>
                        <td>
                            <a href="{{ route('employee.show', $employee)}}">view</a>
                            <a href="{{ route('employee.pdf', $employee)}}">pdf</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection