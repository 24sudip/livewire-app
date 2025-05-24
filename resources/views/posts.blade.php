<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    {{ __('List Of Posts') }}
                    <livewire:product-five />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

