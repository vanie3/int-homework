@extends('welcome')

@section('content')
    @include('errors.list')

    <div class="content">
        <div class="title">Software Applications</div>
    </div>

    <button>
        <a href="/applications/create">Create Application</a>
    </button>

    @foreach($applications as $application)
        <h1>
            <a href="/applications/{{ $application->id }}/edit">{{ $application->title }}</a>
        </h1>
        <p>Version: {{ $application->version }}</p>
        <p>Author Id: {{ $application->author_id }}</p>
    @endforeach
@endsection