@extends('base')

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-4">
        <h1 class="mt-5">User Login</h1>

        <div class="card mt-5">
            <div class="card-body">
                {!! Form::open(['url'=>'/login','method'=>'post']) !!}

                <div class="mb-3">
                    {!! Form::label("username", "User Name") !!}
                    {!! Form::text("username", null, ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    {!! Form::label("password", "Password") !!}
                    {!! Form::password("password", ['class'=>'form-control']) !!}
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">
                        L O G I N
                    </button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
