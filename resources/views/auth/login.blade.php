<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Sign In</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/img/svg/logo.svg') }}" type="image/x-icon" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/style.min.css') }}" />
</head>

<body>
    <div class="layer"></div>
    <main class="page-center">
        <article class="sign-up">

            <h1 class="sign-up__title">Welcome back!</h1>
            <p class="sign-up__subtitle">Sign in to your account to continue</p>

            <!-- Alert error umum -->
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any() && !session('error'))
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form class="sign-up-form form" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <label class="form-label-wrapper">
                    <p class="form-label">Email</p>
                    <input 
                        class="form-input @error('email') is-invalid @enderror" 
                        type="email" 
                        name="email"
                        placeholder="Enter your email" 
                        value="{{ old('email') }}" 
                        required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </label>

                <!-- Password -->
                <label class="form-label-wrapper">
                    <p class="form-label">Password</p>
                    <input 
                        class="form-input @error('password') is-invalid @enderror" 
                        type="password" 
                        name="password"
                        placeholder="Enter your password" 
                        required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </label>

                <!-- Remember Me -->
                <label class="form-checkbox-wrapper">
                    <input class="form-checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="form-checkbox-label">Remember me next time</span>
                </label>

                <!-- Submit Button -->
                <button type="submit" class="form-btn primary-default-btn transparent-btn w-100">
                    Sign in
                </button>
            </form>

        </article>
    </main>

    <!-- Chart library -->
    <script src="{{ asset('admin/plugins/chart.min.js') }}"></script>
    <!-- Icons library -->
    <script src="{{ asset('admin/plugins/feather.min.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('admin/js/script.js') }}"></script>
</body>

</html>
