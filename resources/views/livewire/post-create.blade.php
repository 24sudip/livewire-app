<div class="modal-content">
    <form wire:submit="storePost">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Create Post</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="cancel" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mt-2">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" wire:model="title">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-2">
                <label for="">Body</label>
                <textarea type="text" name="body" class="form-control" wire:model="body"></textarea>
                @error('body')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
            <div class="mt-2">
                <button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="cancel">Cancel</button>
            </div>
            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="cancel">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
    </form>
</div>
{{-- <div class="card">
    <div class="card-header">
        Create Post
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
</div> --}}
