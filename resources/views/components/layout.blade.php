<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="images/favicon.ico" rel="icon" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48">
    <nav class="mb-4 flex items-center justify-between">
        <a href="/"><img class="w-24" class="logo" src="{{ asset('images/logo.png') }}" alt="" /></a>
        <ul class="mr-6 flex space-x-6 text-lg">
            @auth

                <li>
                    <span class='font-bold uppercase'>
                        welcome {{ auth()->user()->name }}
                    </span>
                </li>

                <li>
                    <a class="hover:text-laravel" href="/listings/manage">
                        <i class="fa-solid fa-gear"></i>
                        Manage Listings
                    </a>
                </li>

                <li>
                    <form name='inline' method="POST" action='/logout'>
                        @csrf
                        <button>
                            <i class='fa-solid fa-door-closed'></i>
                            Logout
                        </button>

                    </form>
                </li>
            @else
                <li>
                    <a class="hover:text-laravel" href="/register"><i class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a class="hover:text-laravel" href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <footer
        class="bg-laravel fixed bottom-0 left-0 mt-24 flex h-24 w-full items-center justify-start font-bold text-white opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a class="absolute right-10 top-1/3 bg-black px-5 py-2 text-white" href="/listings/create">Post Job</a>
    </footer>
</body>

</html>
