@section('title','Frontend Reset Password Page')
@include('frontend.auth.partials.auth-header')
<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Forgot Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    @include('frontend.auth.partials.auth-logo')

                    <!-- /Logo -->
                    <h4 class="mb-2">Reset Password  🔁</h4>
                    <!-- Session Status -->
{{--                    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

                    <form id="formAuthentication" class="mb-3" action="{{ route('password.store') }}" method="POST">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">


                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="Enter your email"
                                required
                                autofocus
                                value="{{$request->email}}"
                                autocomplete="username"/>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        {{--Password--}}
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password"
                                />

                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>

                        {{--Confirm Password--}}
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password"
                                />

                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                        </div>



                        <button class="btn btn-primary d-grid w-100">Reset Password</button>
                    </form>
                    <div class="text-center">
                        <a href="{{route('login')}}" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- / Content -->



@include('frontend.auth.partials.auth-footer')

