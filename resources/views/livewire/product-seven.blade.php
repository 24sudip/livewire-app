{{-- Because she competes with no one, no one can compete with her. --}}
<div>
    <form wire:submit="submit">
        @session("success")
        <div class="alert alert-success">{{ $value }}</div>
        @endsession
        <div class="mt-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" wire:model="name">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <h4>Variants</h4>
            <div class="row">
                <div class="col-md-3">
                    <label class="form-label">Name:</label>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Price:</label>
                </div>
                <div class="col-md-3">
                    <label class="form-label">SKU:</label>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-success" wire:click="addVariant">+ Add Variant</button>
                </div>
            </div>
            @foreach ($variants as $index => $variant)
            <div class="row mb-3">
                <div class="col-md-3">
                    <input type="text" name="name" wire:model="variants.{{ $index }}.name" class="form-control" placeholder="Name">
                    @error("variants.{$index}.name")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3">
                    <input type="number" name="price" wire:model="variants.{{ $index }}.price" class="form-control" placeholder="Price">
                    @error("variants.{$index}.price")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3">
                    <input type="text" name="sku" wire:model="variants.{{ $index }}.sku" class="form-control" placeholder="SKU">
                    @error("variants.{$index}.sku")
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-danger" wire:click="removeVariant({{ $index }})">X</button>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>

