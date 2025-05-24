<!-- When there is no desire, all things are at peace. - Laozi -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Three') }}</div>

                <div class="card-body">
                    <livewire:product-three lazy />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

