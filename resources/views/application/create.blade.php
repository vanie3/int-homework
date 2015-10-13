@extends('welcome')

@section('content')

    @include('errors.list')


    <h2>Create an Author (optional): </h2>

    {!! Form::open(['route' => 'authors.store', 'method' => 'POST']) !!}

        @include('author.form', ['submitButtonText' => 'Create Author'])

    {!! Form::close() !!}



    <h2>Create a Software Application: </h2>

    {!! Form::open(['route' => 'applications.store', 'method' => 'POST']) !!}

        @include('application.form', ['submitButtonText' => 'Create Application'])

    {!! Form::close() !!}


@endsection