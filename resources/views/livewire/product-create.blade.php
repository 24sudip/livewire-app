<div>
    {{-- <form wire:submit.prevent="submitProduct"> --}}
    <form wire:submit="submitProduct">
        {{-- <label>Category:</label><br>
        <select class="form-select" wire:model="category">
            <option value="">Select a category...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select> --}}

        <label>Name: </label>
        <input type="text" name="name" class="form-control" wire:model="name" wire:dirty.class="is-invalid"
        wire:dirty.class.remove="is-valid">
        {{-- <input type="text" name="name" class="form-control" wire:model.live="name"> --}}

        {{-- {{ $name }} <br> --}}
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror

        <label>Price: </label>
        {{-- <input type="text" name="price" class="form-control" wire:model.change="price"> --}}
        <input type="text" name="price" class="form-control" wire:model="price" wire:dirty.class="is-invalid"
        wire:dirty.class.remove="is-valid">
        {{-- {{ $price }} <br> --}}
        @error('price')
        <p class="text-danger">{{ $message }}</p>
        @enderror

        {{-- <label>Status:</label><br>
        <label><input type="radio" value="active" wire:model="status">Active</label>
        <label><input type="radio" value="inactive" wire:model="status">Inactive</label><br>

        <label class="mt-1">Vendor:</label><br>
        <label><input type="checkbox" value="vendor_1" wire:model="vendors">Vendor 1</label>
        <label><input type="checkbox" value="vendor_2" wire:model="vendors">Vendor 2</label>
        <label><input type="checkbox" value="vendor_3" wire:model="vendors">Vendor 3</label><br> --}}

        <label>Detail:</label>
        {{-- <textarea name="detail" class="form-control" wire:model.blur="detail"></textarea> --}}
        <textarea name="detail" class="form-control" wire:model="detail" wire:dirty.class="is-invalid"
        wire:dirty.class.remove="is-valid"></textarea>
        {{-- {{ $detail }} <br> --}}
        @error('detail')
        <p class="text-danger">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn btn-success mt-3" wire:loading.attr="disabled">Save</button>
        <br>
        <div wire:dirty>Unsaved changes...</div>
        <br>
        {{-- <button class="btn btn-danger mt-3" type="button" wire:click="resetForm">Reset</button> --}}
        <button class="btn btn-danger mt-3" wire:click.prevent="resetForm">Reset</button>
        <br>
        <div wire:loading>
            Product loading...
        </div>
    </form>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>

