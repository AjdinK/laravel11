<x-layout>
    <x-card class='mx-auto mt-24 max-w-lg rounded p-10'>
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                Register
            </h2>
            <p class="mb-4">Create an account to post gigs</p>
        </header>

        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="name">
                    Name
                </label>
                <input class="w-full rounded border border-gray-200 p-2" name="name" type="text"
                    value="{{ old('name') }}" />

                @error('name')
                    <p class="mt-1 text-xs text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="email">Email</label>
                <input class="w-full rounded border border-gray-200 p-2" name="email" type="email"
                    value="{{ old('email') }}" />

                @error('email')
                    <p class="mt-1 text-xs text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="password">
                    Password
                </label>
                <input class="w-full rounded border border-gray-200 p-2" name="password" type="password"
                    value="{{ old('password') }}" />

                @error('password')
                    <p class="mt-1 text-xs text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mb-6">
                <label class="mb-2 inline-block text-lg" for="password2">
                    Confirm Password
                </label>
                <input class="w-full rounded border border-gray-200 p-2" name="password_confirmation" type="password"
                    vvalue="{{ old('password_confirmation') }}" />

                @error('password_confirmation')
                    <p class="mt-1 text-xs text-red-500">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mb-6">
                <button class="bg-laravel rounded px-4 py-2 text-white hover:bg-black" type="submit">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a class="text-laravel" href="/login">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
