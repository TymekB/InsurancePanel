@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add client</div>

                    <div class="panel-body">
                        {!! Form::open(['method'=>'POST', 'class'=>'form-horizontal']) !!}
                            <div class="form-group">

                                <div class="col-md-4 control-label">
                                    {!! Form::label('firstname', 'Firstname') !!}
                                </div>

                                <div class="col-md-6">
                                    {!! Form::text('firstname', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-4 control-label">
                                    {!! Form::label('lastname', 'Lastname') !!}
                                </div>

                                <div class="col-md-6">
                                    {!! Form::text('lastname', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-4 control-label">
                                    {!! Form::label('insurance_company', 'Insurance company') !!}
                                </div>

                                <div class="col-md-6">
                                    {!! Form::select('insurance_company', ['Allianz' => 'Allianz', 'link4' => 'Link4', 'Proama' => 'Proama', 'AXADirect' => 'AXADirect'], null, ['class'=>'form-control']); !!}
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-4 control-label">
                                    {!! Form::label('expiration_date', 'Expiration date') !!}
                                </div>

                                <div class="col-md-6">
                                    {!! Form::date('expiration_date', null, ['class'=>'form-control']); !!}
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-4">

                                    {!! Form::submit('Create client', ['class'=>'btn btn-success']) !!}

                                </div>
                            </div>
                        {!! Form::close() !!}

                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>
                        @endforeach

                    </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection