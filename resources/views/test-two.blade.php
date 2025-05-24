<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Create Two') }}</div>

                <div class="card-body">
                    <livewire:product-create-two />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

