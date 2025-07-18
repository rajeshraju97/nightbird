@extends('layouts.app')

@section('content')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card -->
                <div class="card shadow rounded-4 border-0">
                    <div class="card-body p-4">

                        <h4 class="text-center mb-4">Login to <span class="fw-bold text-primary">Nightbird</span></h4>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                    required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-1 text-danger small" />
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" class="form-control" type="password" name="password" required
                                    autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-1 text-danger small" />
                            </div>

                            <!-- Remember Me -->
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                <label class="form-check-label" for="remember_me">
                                    Remember Me
                                </label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                @if (Route::has('password.request'))
                                    <a class="small text-decoration-none text-primary" href="{{ route('password.request') }}">
                                        Forgot your password?
                                    </a>
                                @endif

                                <button type="submit" class="btn btn-primary px-4 rounded-pill">
                                    Login
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <p class="small">Don't have an account?
                                <a href="{{ route('register') }}" class="text-decoration-none text-primary">Register
                                    here</a>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
@endsection