@extends('layouts.app')

@section('title', $title = config('app.name', 'Laravel'))

@section('content')
<div class="row">
    <div class="col s12 m10 l8 offset-m1 offset-l2">
        <div class="card">
            <div class="card-content">
                <div class="right-align">
                    <a href="{{ route('login') }}" class="waves-effect waves-light btn">{{ __('Login') }}</a>
                    <a href="{{ route('register') }}" class="waves-effect waves-light btn">{{ __('Register') }}</a>
                </div>
            </div>
            <div class="card-action center-align">
                <h2>Welcome!</h2>
            </div>
        </div>
    </div>
</div>
@endsection
