<div>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('assets/static/customers logo.svg') }}" height="36"
                        alt=""></a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 card-title text-center mb-4">Login to your account</h2>
                    <form wire:submit.prevent="handleLogin()" autocomplete="off" novalidate>
                        <div class="mb-3">
                            <label class="form-label required">Email address</label>
                            <input type="email" wire:model="email" class="form-control" placeholder="your@email.com"
                                autocomplete="off">
                            @error('email')
                                <span class="alert-danger text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label required">
                                Password
                                <span class="form-label-description">
                                    <a href="./forgot-password.html">I forgot password</a>
                                </span>
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" wire:model="password" class="form-control"
                                    placeholder="Your password" autocomplete="off">
                            </div>
                            @error('password')
                                <span class="alert-danger text-red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </form>
                    <div class="mt-5">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div>
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="{{ route('signup') }}" tabindex="-1">Sign up</a>
            </div>
        </div>
    </div>
</div>
