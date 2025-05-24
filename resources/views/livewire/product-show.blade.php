{{-- Because she competes with no one, no one can compete with her. --}}
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

