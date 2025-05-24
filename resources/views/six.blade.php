<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>
                        {{ __('User Create') }}
                    </h3>
                </div>

                <div class="card-body">
                    <livewire:user-create />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

