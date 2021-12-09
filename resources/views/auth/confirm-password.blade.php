
        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <span class="mb-4"></span>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <label for="password" >{{ __('Password') }}</label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <button class="ml-4">
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>

