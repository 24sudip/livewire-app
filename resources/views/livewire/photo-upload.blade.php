<div>
    <form wire:submit.prevent="submitPhoto">
        @session('success')
        <div class="alert alert-success">
            {{ $value }}
        </div>
        @endsession

        @session('error')
        <div class="alert alert-danger">
            {{ $value }}
        </div>
        @endsession

        @if ($photo)
        Photo Preview:
        <img src="{{ $photo->temporaryUrl() }}" width="100"><br>
        @endif

        <label>Image:</label>
        <input type="file" name="photo" class="form-control" wire:model="photo">
        @error('photo')
        <p class="text-danger">{{ $message }}</p>
        @enderror

        <button class="btn btn-success mt-3">Save</button>
    </form>
    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col" width="50">ID</th>
                <th scope="col">Name</th>
                <th scope="col" width="200">Download</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
                <th scope="row">{{ $image->id }}</th>
                <td>{{ $image->title }}</td>
                <td>
                    <button wire:click="download('{{ $image->filepath }}')" class="btn btn-success">Download</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
