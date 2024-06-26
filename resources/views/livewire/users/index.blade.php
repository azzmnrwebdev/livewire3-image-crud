<div>
    <table class="table mb-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Joined</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr wire:key="{{ $user->id }}">
                    <td scope="row">{{ $loop->index + $users->firstItem() }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d F, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-pagination :items="$users" />
</div>
