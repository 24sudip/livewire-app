{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. session('status') --}}
<div>
    @session('success')
    <div class="alert alert-success">
        {{ $value }}
    </div>
    @endsession

    {{-- @if ($postUpdate)
        @include('livewire.post-update')
    @endif --}}

    {{-- @if ($postAdd)
        @include('livewire.post-create')
    @else
    <button class="btn btn-primary mt-3" wire:click="addPost()">Create Post Below</button>
    @endif --}}

    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#postModal" wire:click="addPost()">
        Create Post Up
    </button>

    <!-- Modal -->
    <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog">
            @if ($postAdd)
                @include('livewire.post-create')
            @endif

            @if ($postUpdate)
                @include('livewire.post-update')
            @endif
        </div>
    </div>

    <div class="mt-3">
        <input type="text" name="search" wire:model.live="search" class="form-control" placeholder="Search">
    </div>

    <table class="table table-striped table-bordered mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <button class="btn btn-info btn-sm" wire:click="editPost({{ $post->id }})" data-bs-toggle="modal" data-bs-target="#postModal">Edit</button>
                        <button class="btn btn-danger btn-sm" wire:confirm="Are you sure you want to remove this post?" wire:click="deletePost({{ $post->id }})">Delete</button>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">There Are No Posts</td>
                </tr>
            @endif
        </tbody>
    </table>
    {{ $posts->links() }}
</div>

@script
<script>
    $wire.on('close-modal', () => {
        // alert("hi");
        $(".btn-close").trigger("click");
    });
</script>
@endscript
