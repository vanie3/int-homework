<div class="form-group">
    {!!  Form::label('title', 'Title:') !!}
    {!!  Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Logic Studio']) !!}
</div>

<div class="form-group">
    {!!  Form::label('version', 'Select A Version:') !!}
    <select class="form-control" name="version">
        @foreach($versions as $version)
            <option value="{{$version}}" @if(isset($application) && $application->version == $version) selected="" @endif>
                {{ number_format($version, 1) }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!!  Form::label('author_id', 'Select A Company (Author):') !!}

    <select class="form-control" name="author_id">
        <option value="" disabled selected>- -</option>
        @foreach($authors as $author)
            <option value="{{ $author->id }}"  @if(isset($application) && $application->author_id == $author->id) selected="" @endif>
                {{ $author->company_name }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
