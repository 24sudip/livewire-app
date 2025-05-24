{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div>
    <div class="">
        <input type="text" name="search" class="form-control" placeholder="Search" wire:model="search"
        wire:keyup="set('search', $event.target.value)">
    </div>
    <p>test</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button wire:click="delete({{ $user->id }})" wire:confirm="Are you sure you want to remove this user?" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>

