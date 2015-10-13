@extends('welcome')

@section('content')

    <h1>Edit Software Application</h1>

    {!! Form::model($application, ['route' => ['applications.update', $application->id], 'method' => 'PUT']) !!}

    @include('application.form', ['submitButtonText' => 'Save Changes'])

    {!! Form::close() !!}
@endsection
