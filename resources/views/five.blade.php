<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Manage Posts</h2>
            <div class="card">
                {{-- <div class="card-header">{{ __('Photo Upload') }}</div> --}}

                <div class="card-body">
                    {{-- <livewire:photo-upload /> --}}
                    <livewire:all-post />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

