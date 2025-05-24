{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <button class="btn btn-danger btn-sm" wire:click="productDelete({{ $product->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@script
<script>
    // This Javascript will get executed every time this component is loaded onto the page...
    $wire.on("confirm", (event) => {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                // alert(event.id);
                $wire.dispatch("deleteProduct", { id: event.id });
                // Swal.fire({
                // title: "Deleted!",
                // text: "Your file has been deleted.",
                // icon: "success"
                // });
            }
        });
    });
</script>
@endscript

