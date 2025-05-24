<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    <livewire:all-product />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

