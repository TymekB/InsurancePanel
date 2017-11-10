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
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Insurance company</th>
                    <th>Expiration date</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>

                @foreach($clients as $client)
                <tr>
                    <td>{{$client->firstname}}</td>
                    <td>{{$client->lastname}}</td>
                    <td>{{$client->insurance_company}}</td>

                    @php
                        $now = new DateTime();
                        $end = new DateTime($client->expiration_date);
                        $dateDiff = $now->diff($end);
                    @endphp

                    <td class="{{ $dateDiff->days < 21 ? 'danger' : '' }}">{{$client->expiration_date}}</td>

                    <td><a href="/client/edit/{{$client->id}}" class="btn btn-default btn-sm">Edit</a> <a href="client/delete/{{$client->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>

            {{$clients->render()}}
        </div>
    </div>
</div>
@endsection
