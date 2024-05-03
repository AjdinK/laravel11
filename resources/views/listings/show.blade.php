<x-layout>
    <a class="mb-4 ml-4 inline-block text-black" href="/"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card>

            <div class="flex flex-col items-center justify-center text-center">
                <img class="mb-6 mr-6 w-48"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                    alt="" />

                <h3 class="mb-2 text-2xl">{{ $listing->title }}</h3>
                <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>


                <x-listing-tag :tagsCsv="$listing->tags" />


                <div class="my-4 text-lg">
                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                </div>
                <div class="mb-6 w-full border border-gray-200"></div>
                <div>
                    <h3 class="mb-4 text-3xl font-bold">
                        {{ $listing->title }}
                    </h3>
                    <div class="space-y-6 text-lg">
                        {{ $listing->description }}

                        <a class="bg-laravel mt-6 block rounded-xl py-2 text-white hover:opacity-80"
                            href="{{ $listing->email }}}"><i class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a class="block rounded-xl bg-black py-2 text-white hover:opacity-80"
                            href="{{ $listing->website }}" target="_blank"><i class="fa-solid fa-globe"></i>
                            Visit
                            Website</a>
                    </div>
                </div>
            </div>
    </div>
    </x-card>

    <x-card class='mt-4 flex space-x-6 p-2'>

        <a href='/listings/{{ $listing->id }}/edit'>
            <i class='fa-solid fa-pencil'></i> Edit
        </a>

        <form method="POST" action='/listings/{{ $listing->id }}'>
            @csrf
            @method('delete')
            <button class="text-red-500">
                <i class="fa-solid fa-trash"></i>
                Delete
            </button>
        </form>

    </x-card>






    </div>
</x-layout>
