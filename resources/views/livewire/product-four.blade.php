{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
<div>
    <form wire:submit="submitProduct">
        <div class="mt-3">
            <label for="">Category:</label>
            <div class="">
                <select class="form-select select2-cat" name="category_id" wire:model="category_id" multiple>
                    <option value="">--Select Category--</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('category_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
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
        <div class="mt-3">
            <label for="">Publish Date:</label>
            <input type="text" name="publish_date" class="form-control" wire:model="publish_date" id="publish_date">
            {{-- @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror --}}
        </div>
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
        <button type="button" class="btn btn-secondary mt-5" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            Tooltip on top
        </button>
    </form>
</div>

@script
<script>
    $('#publish_date').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-3d'
    }).on("changeDate", function (e) {
        @this.set("publish_date", e.format('yyyy-mm-dd'));
    });
    document.addEventListener("livewire:initialized", function () {
        function loadJavascript() {
            $('.select2-cat').select2().on("change", function () {
                $wire.set("category_id", $(this).val());
            });
        }
        loadJavascript();
        Livewire.hook("morphed", () => {
            loadJavascript();
        });
    });
</script>
@endscript

