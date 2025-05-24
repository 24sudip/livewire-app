{{-- In work, do what you enjoy. --}}
<div>
    {{-- <div  wire:init="loadProducts" wire:poll="loadProducts"> --}}
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            {{-- <livewire:product-show :product="$product" /> --}}
            <livewire:product-show :$product />
            @endforeach
        </tbody>
    </table>
</div>

