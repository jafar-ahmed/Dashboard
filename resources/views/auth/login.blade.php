<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif


        <!-- Pills content -->

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <p>Not a member? <a href="/register">Register</a></p>
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

{{--<div class="tab-content">--}}
{{--    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">--}}
{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}
{{--            <div class="text-center mb-3">--}}
{{--                <p>Sign in with:</p>--}}
{{--                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                    <i class="fab fa-facebook-f"></i>--}}
{{--                </button>--}}

{{--                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                    <i class="fab fa-google"></i>--}}
{{--                </button>--}}

{{--                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                    <i class="fab fa-twitter"></i>--}}
{{--                </button>--}}

{{--                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                    <i class="fab fa-github"></i>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--            <p class="text-center">or:</p>--}}

{{--            <!-- Email input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <input type="email" name="email" :value="old('email')" required autofocus id="loginName" class="form-control" />--}}
{{--                <label class="form-label" for="loginName">Email</label>--}}
{{--            </div>--}}

{{--            <!-- Password input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <input type="password" name="password" required autocomplete="current-password" id="loginPassword" class="form-control" />--}}
{{--                <label class="form-label" for="loginPassword">Password</label>--}}
{{--            </div>--}}

{{--            <!-- 2 column grid layout -->--}}
{{--            <div class="row mb-4">--}}
{{--                <div class="col-md-6 d-flex justify-content-center">--}}
{{--                    <!-- Checkbox -->--}}
{{--                    <div class="form-check mb-3 mb-md-0">--}}
{{--                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />--}}
{{--                        <label class="form-check-label" for="loginCheck"> Remember me </label>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-6 d-flex justify-content-center">--}}
{{--                    <!-- Simple link -->--}}
{{--                    <a href="#!">Forgot password?</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- Submit button -->--}}
{{--            <x-jet-button class="ml-4">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-jet-button>--}}
{{--            <!-- Submit button -->--}}
{{--            --}}{{-- <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>--}}

{{--            <!-- Register buttons -->--}}
{{--            <div class="text-center">--}}
{{--                <p>Not a member? <a href="/register">Register</a></p>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">--}}
{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}
{{--            <div class="text-center mb-3">--}}
{{--                <p>Sign up with:</p>--}}
{{--                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                    <i class="fab fa-facebook-f"></i>--}}
{{--                </button>--}}

{{--                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                    <i class="fab fa-google"></i>--}}
{{--                </button>--}}

{{--                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                    <i class="fab fa-twitter"></i>--}}
{{--                </button>--}}

{{--                <button type="button" class="btn btn-link btn-floating mx-1">--}}
{{--                    <i class="fab fa-github"></i>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--            <p class="text-center">or:</p>--}}

{{--            <!-- Name input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <input type="text" id="registerName" class="form-control" />--}}
{{--                <label class="form-label" for="registerName">Name</label>--}}
{{--            </div>--}}

{{--            <!-- Username input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <input type="text" id="registerUsername" class="form-control" />--}}
{{--                <label class="form-label" for="registerUsername">Username</label>--}}
{{--            </div>--}}

{{--            <!-- Email input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <input type="email" id="registerEmail" class="form-control" />--}}
{{--                <label class="form-label" for="registerEmail">Email</label>--}}
{{--            </div>--}}

{{--            <!-- Password input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <input type="password" id="registerPassword" class="form-control" />--}}
{{--                <label class="form-label" for="registerPassword">Password</label>--}}
{{--            </div>--}}

{{--            <!-- Repeat Password input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <input type="password" id="registerRepeatPassword" class="form-control" />--}}
{{--                <label class="form-label" for="registerRepeatPassword">Repeat password</label>--}}
{{--            </div>--}}

{{--            <!-- Checkbox -->--}}
{{--            <div class="form-check d-flex justify-content-center mb-4">--}}
{{--                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked--}}
{{--                       aria-describedby="registerCheckHelpText" />--}}
{{--                <label class="form-check-label" for="registerCheck">--}}
{{--                    I have read and agree to the terms--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <x-jet-button class="ml-4">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-jet-button>--}}
{{--            <!-- Submit button -->--}}
{{--            --}}{{--                    <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
