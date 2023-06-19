<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div>
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('assets/static/customers logo.svg') }}" height="36"
                alt=""></a>
    </div>
    <form wire:submit.prevent="createAccount()" class="card card-md" autocomplete="off" novalidate>
        <div class="card-body">
            <h2 class="h2 card-title text-center mb-4">Create new account</h2>
            <div class="mb-3">
                <label class="form-label required">Name</label>
                <input type="email" wire:model="name" class="form-control" placeholder="Enter name"
                    autocomplete="off">
                @error('email')
                    <span class="alert-danger text-red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label required">Email address</label>
                <input type="email" wire:model="email" class="form-control" placeholder="Enter email"
                    autocomplete="off">
                @error('email')
                    <span class="alert-danger text-red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label required">Password</label>
                <div class="input-group input-group-flat">
                    <input type="password" wire:model="password" class="form-control" placeholder="Password"
                        autocomplete="off">
                </div>
                @error('password')
                    <span class="alert-danger text-red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-check">
                    <input type="checkbox" class="form-check-input" />
                    <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms
                            and policy</a>.</span>
                </label>
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Create new account</button>
            </div>
        </div>
    </form>
    <div class="text-center text-muted mt-3">
        Already have account? <a href="{{ route('login') }}" tabindex="-1">Sign in</a>
    </div>
</div>
