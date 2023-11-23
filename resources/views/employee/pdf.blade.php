@extends('employee.app')

@section('content')
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Employee &raquo; pdf</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="card">
        <div class="card-header">
            <label>Employee information</label>
        </div>
        <div class="card-body">

            <table class="table table-striped table-bordered">

                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{$employee->name}}</td>
                    </tr>
                    <tr>
                        <td>Surnane</td>
                        <td>{{$employee->surname}}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{$employee->phone}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$employee->email}}</td>
                    </tr>
                    <tr>
                        <td>designation</td>
                        <td>{{$employee->designation}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
</section>
@endsection