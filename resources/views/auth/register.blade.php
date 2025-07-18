@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Register to NightBird</h2>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                                autofocus>
                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                required>
                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation" required>
                            @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('login') }}">Already registered?</a>
                            <button type="submit" class="btn btn-dark rounded-pill px-4">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection