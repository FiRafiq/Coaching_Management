@extends('admin.app', ['title' => 'users'])

@section('maincontent')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Running Batches</h6>
            <!-- create link -->
            <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
            <a href="">Show All</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email </th>
                        <th scope="col">Photo</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($users->count() > 0)
                    @foreach ($users as $user)
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><img src="{{ $user->photo }}" alt="" width="50px" height="50px"></td>
                        <td>{{ $user->role }}</td>

                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('users.show', $user->id) }}">Show</a>
                            <a class="btn btn-sm btn-secondary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7">No data found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
            <div class="d-grid mt-3">{{ $users->links() }}</div>
        </div>
    </div>
</div>
@endsection