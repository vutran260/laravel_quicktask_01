@if (Session::has('message'))
    <div class="alert alert-info">
        <strong>{{ Session::get('message') }}</strong>
    </div>
@endif
