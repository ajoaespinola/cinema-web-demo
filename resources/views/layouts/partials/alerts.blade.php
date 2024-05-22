@if(\Session::has('success'))
    <div class="alert alert-success" role="alert" style="margin-top: 0.5em; margin-bottom: 0.5em;">
        <strong>¡{{ __('alerts.success') }}! {{ \Session::get("success") }}</strong>
    </div>
@endif

@if(\Session::has('info'))
    <div class="alert alert-info" role="alert" style="margin-top: 1em; margin-bottom: 0.5em;">
        {!! \Session::get("info") !!}
    </div>
@endif

@if(\Session::has('warning'))
    <div class="alert alert-warning" role="alert" style="margin-top: 1em; margin-bottom: 0.5em;">
        <strong>{{ \Session::get("warning") }}</strong>
    </div>
@endif

@if(\Session::has('error'))
    <div class="alert alert-danger" role="alert" style="margin-top: 1em; margin-bottom: 0.5em;">
        <strong>{{ \Session::get("error") }}</strong>
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger m-1" role="alert">
        <strong>¡Oops!</strong> {{ __('alerts.error_message') }}
        <ul class="mt-1 mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div id="global_alerts" name="global_alerts" style="margin-top: 1em; margin-bottom: 0.5em; display: none;"></div>
