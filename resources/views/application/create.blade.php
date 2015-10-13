@extends('welcome')

@section('content')

    @include('errors.list')

    @if(Route::getRoutes()->hasNamedRoute('applications.create'))
        <h2>Create an Author (optional): </h2>

        {!! Form::open(['route' => 'authors.store', 'method' => 'POST']) !!}

        {{--<div class="form-group">--}}
            {{--{!!  Form::label('email', 'Email:') !!}--}}
            {{--{!!  Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com']) !!}--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--{!!  Form::label('company_name', 'Company Name:') !!}--}}
            {{--{!!  Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Apple Inc.']) !!}--}}
        {{--</div>--}}

        @include('author.form', ['submitButtonText' => 'Create Author'])

        {{--{!! Form::submit('Create Author', ['class' => 'btn btn-primary form-control']) !!}--}}

        {!! Form::close() !!}
    @endif


    <h2>Create a Software Application: </h2>

    {!! Form::open(['route' => 'applications.store', 'method' => 'POST']) !!}

        {{--<div class="form-group">--}}
            {{--{!!  Form::label('title', 'Title:') !!}--}}
            {{--{!!  Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Pages']) !!}--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--{!!  Form::label('version', 'Select Version:') !!}--}}
            {{--<select class="form-control" name="version">--}}
                {{--@foreach($versions as $version)--}}
                {{--<option value="{{ $version }}">{{ $version }}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}
            {{--{!!  Form::label('author_id', 'Select Author Company:') !!}--}}
            {{--<select class="form-control" name="author_id">--}}
                {{--<option value="" disabled selected>- -</option>--}}
                {{--@foreach($authors as $author)--}}
                    {{--<option value="{{ $author->id }}">--}}
                        {{--{{ $author->company_name }}--}}
                    {{--</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}

        {{--</div>--}}

        @include('application.form', ['submitButtonText' => 'Create Application'])

        {{--{!! Form::submit('Create Application', ['class' => 'btn btn-primary form-control']) !!}--}}

    {!! Form::close() !!}

@endsection