@extends('layouts.backend')
@section('content')
        <div class="col-xl-6 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">edit akun {{$user->name}}</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="col-lg-12">
                        <form action="{{ route('user.update', $user->id) }}" method="POST" role="form"
                            enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label class="mb-2 mt-3 mx-2 text-dark">Full Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $user->name }}" placeholder="name" required>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-2 mt-3 mx-2 text-dark">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $user->email }}" placeholder="email" required>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-2 mt-3 mx-2 text-dark">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" required>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label class="mb-2 mt-3 mx-2 text-dark">Confirm Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" placeholder="confirm password" required>

                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label class="mb-2 mt-3 mx-2 text-dark">Role</label>
                                <select type="" class="form-control  @error('is_Admin') is-invalid @enderror" name="is_admin"
                                    placeholder="Role" value=' {{ $user->is_admin }}' required></select>
                            </div></form>
                    </div>
                </div>
            </div>
        </div>
@endsection
