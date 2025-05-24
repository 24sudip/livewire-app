{{-- Be like water. --}}
<div wire:init="loadCategories">
    <form wire:submit="submitProductTwo">
        <div class="mt-3">
            <label for="">Category:</label>
            <select class="form-select" wire:model="category">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="">Name:</label>
            <input type="text" name="name" class="form-control" wire:model="name">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <label for="">Price:</label>
            <input type="number" name="price" class="form-control" wire:model="price">
            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <label for="">Detail:</label>
            <textarea name="detail" class="form-control" wire:model="detail"></textarea>
            @error('detail')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        {{-- <div class="mt-3" wire:transition> --}}
        {{-- <div class="mt-3" wire:transition.origin.top> --}}
        {{-- <div class="mt-3" wire:transition.origin.bottom> --}}

        <div class="mt-3">
            <label for="featured_product">
                <input type="checkbox" id="featured_product" name="isFeatured" wire:model.live="isFeatured"> is this Featured Product ?
            </label>
        </div>
        @if ($isFeatured)
        <div class="mt-3" wire:transition.origin.left>
            <label>Reason Of Featured Product:</label>
            <input type="text" name="reason" class="form-control" wire:model="reason">
            <small>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam odio neque quasi commodi reiciendis voluptas perferendis non, eos ut cupiditate animi! Consequatur minima quibusdam aliquid, iste ab obcaecati ut quas.
            </small>
        </div>
        @endif
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
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

