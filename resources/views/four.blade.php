<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Create Four') }}</div>

                <div class="card-body">
                    <livewire:product-four />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

