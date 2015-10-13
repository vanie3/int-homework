<div class="form-group">
    {!!  Form::label('email', 'Email:') !!}
    {!!  Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com']) !!}
</div>

<div class="form-group">
    {!!  Form::label('company_name', 'Company Name:') !!}
    {!!  Form::text('company_name', null, ['class' => 'form-control', 'placeholder' => 'Apple Inc.']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>