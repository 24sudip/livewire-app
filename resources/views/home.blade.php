@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Photo Upload') }}</div>
                {{-- <div class="card-header">{{ __('Product Create') }}</div> --}}
                {{-- <div class="card-header">{{ __('Counter') }}</div> --}}
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    <livewire:photo-upload />
                    <livewire:product-create />
                    <livewire:counter />
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

