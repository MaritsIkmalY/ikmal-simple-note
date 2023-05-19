@if (session()->has('success'))
    <div class="alert alert-success my-3">
        {{ session()->get('success') }}
    </div>
@elseif (session()->has('danger'))
    <div class="alert alert-danger my-3">
        {{ session()->get('danger') }}
    </div>
@endif
