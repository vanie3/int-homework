@foreach($errors->all() as $error)
    <div class="alert bg-danger flash_message text-danger alert-error">
        <i class="fa fa-bolt"></i>
        <span class="sr-only">Error:</span>
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times
        </button>
    </div>
@endforeach
@if(Session::has('flash_message_success'))
    <div class="alert bg-success flash_message text-success">
        <i class="fa fa-thumbs-o-up"></i>
        {{ session('flash_message_success') }}
    </div>
@endif