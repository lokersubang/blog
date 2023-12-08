<x-auth title=Login>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <a href="{{ route('home') }}"> <img class="mb-4" src="/img/login.png" alt="Login" title="Home" width="72"
                height="72"></a>
        <h1 class="h3 mb-3 fw-normal">Login <strong>Akun</strong></h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="email" type="email" name="email"
                :value="old('email')" required autofocus autocomplete="username">
            <label for="email">Email address</label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="password" placeholder="Password" type="password"
                name="password" required autocomplete="current-password">
            <label for="password">Password</label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" id="remember_me" type="checkbox" value="remember-me" name="remember"
                id="flexCheckDefault">
            <label class="form-check-label" for="remember_me">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2 fw-semibold" type="submit">Login</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; {{ date('Y') }} Blog</p>
    </form>

</x-auth>
