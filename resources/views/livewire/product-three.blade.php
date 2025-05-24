{{-- The whole world belongs to you. --}}
<div>
    <table class="table table-bordered table-striped mt-3">
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
            <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    @if ($product->status == 'Available')
                    <span class="badge text-bg-primary">Available</span>
                    @elseif ($product->status == 'On Sale')
                    <span class="badge text-bg-success">On Sale</span>
                    @else
                    <span class="badge text-bg-danger">Out Of Stock</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

