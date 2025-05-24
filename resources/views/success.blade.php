<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Success Page') }}</div>

                <div class="card-body">
                    @session('success')
                    <div class="alert alert-success">
                        {{ $value }}
                    </div>
                    @endsession
                    <h1>Success Page</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

