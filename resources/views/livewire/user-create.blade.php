{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div>
    <form wire:submit="submitUser">
        <div class="mt-3">
            <label class="form-label">Country:</label>
            <select class="form-select select2-country" wire:model="country_id">
                <option value="">--Select Country--</option>
                @foreach ($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            @error('country_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <label class="form-label">State:</label>
            <select class="form-select select2-state" wire:model="state_id">
                <option value="">--Select State--</option>
                @foreach ($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
            @error('state_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <label class="form-label">City:</label>
            <select class="form-select select2-city" wire:model="city_id">
                <option value="">--Select City--</option>
                @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
            @error('city_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" wire:model="name">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" wire:model="email">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
</div>
@script
<script>
    // This Javascript will get executed every time this component is loaded onto the page...
    document.addEventListener("livewire:initialized", function () {
        function loadJquery() {
            $('.select2-country').select2().on("change", function () {
                $wire.set("country_id", $(this).val());
                $wire.dispatch("change-country");
            });

            $('.select2-state').select2().on("change", function () {
                $wire.set("state_id", $(this).val());
                $wire.dispatch("change-state");
            });

            $('.select2-city').select2().on("change", function () {
                $wire.set("city_id", $(this).val());
            });
        }
        loadJquery();
        Livewire.hook("morphed", () => {
            loadJquery();
        })
    });
</script>
@endscript

