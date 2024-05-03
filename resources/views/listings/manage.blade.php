<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="my-6 text-center text-3xl font-bold uppercase">
                Manage Gigs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="border-gray-300">
                            <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                                <a href="/listings/{{ $listing->id }}">
                                    {{ $listing->title }}
                                </a>
                            </td>
                            <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                                <a class="rounded-xl px-6 py-2 text-blue-400" href="/listings/{{ $listing->id }}/edit"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">

                                <form method="POST" action='/listings/{{ $listing->id }}'>
                                    @csrf
                                    @method('delete')
                                    <button class="text-red-500">
                                        <i class="fa-solid fa-trash"></i>
                                        Delete
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300"></tr>
                    <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                        <p>No Listings Found</p>
                    </td>
                @endunless
            </tbody>
        </table>
    </x-card>

</x-layout>
