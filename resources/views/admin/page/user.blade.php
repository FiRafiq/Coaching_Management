@extends('admin.app', ['title' => 'users'])

@section('maincontent')
<!-- users show start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">User Show</h6>
            <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">{{ $user->name }}</h6>
                <form action="" method="">

                    <div class="row mb-3">
                        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputName3" value="{{ $user->name }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" value="{{ $user->email }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputUsername3" value="{{ $user->username }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputRole3" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputRole3" value="{{ $user->role }}" readonly>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
