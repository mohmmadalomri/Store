@extends('layout.store')
@section('page_title', 'register')
@section('content')
    <x-auth-card>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="container login-container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading mb-1">
                                <div class="col-md-6">
                                    <div class="heading mb-1">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <!-- Name -->
                                            <div>
                                                <x-label for="name" :value="__('Name')" class="form-input form-wide" />

                                                <x-input id="name" class="form-input form-wide" type="text"
                                                    name="name" :value="old('name')" required autofocus />
                                            </div>

                                            <!-- Email Address -->
                                            <div class="col-md-6">
                                                <x-label for="email" :value="__('Email')" />

                                                <x-input id="email" class="form-input form-wide" type="email"
                                                    name="email" :value="old('email')" required />
                                            </div>

                                            <!-- Password -->
                                            <div class="col-md-6">
                                                <x-label for="password" :value="__('Password')" />

                                                <x-input id="password" class="form-input form-wide" type="password"
                                                    name="password" required autocomplete="new-password" />
                                            </div>

                                            <!-- Confirm Password -->
                                            <divclass="col-md-6">
                                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                                <x-input id="password_confirmation" cclass="form-input form-wide"
                                                    type="password" name="password_confirmation" required />
                                    </div>

                                    <div class="col-md-6">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                        <x-button class="btn btn-dark btn-md w-100">
                                            {{ __('Register') }}
                                        </x-button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </x-auth-card>
@endsection
