
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <span class="mb-4"></span>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <label for="email" >{{ __('Email') }}</label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button>
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>

