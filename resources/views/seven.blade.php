<!-- Be present above all else. - Naval Ravikant -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Seven') }}</div>

                <div class="card-body">
                    <livewire:product-seven />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

