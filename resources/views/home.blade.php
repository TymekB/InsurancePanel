@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Insurance company</th>
                    <th>Expiration date</th>
                    <th>Created at</th>
                    <th>Last update</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Id</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>20-10-2017</td>
                    <td>20-09-2017</td>
                    <td>20-09-2017</td>
                    <td>20-09-2017</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
