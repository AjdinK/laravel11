<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="my-6 text-center text-3xl font-bold uppercase">
                Manage Gigs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <tr class="border-gray-300">
                    <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                        <a href="show.html">
                            Laravel Senior Developer
                        </a>
                    </td>
                    <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                        <a class="rounded-xl px-6 py-2 text-blue-400" href="edit.html"><i
                                class="fa-solid fa-pen-to-square"></i>
                            Edit</a>
                    </td>
                    <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                        <form action="">
                            <button class="text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

                <tr class="border-gray-300">
                    <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                        <a href="show.html">
                            Junior Developer Opening
                        </a>
                    </td>
                    <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                        <a class="rounded-xl px-6 py-2 text-blue-400" href="edit.html"><i
                                class="fa-solid fa-pen-to-square"></i>
                            Edit</a>
                    </td>
                    <td class="border-b border-t border-gray-300 px-4 py-8 text-lg">
                        <form action="">
                            <button class="text-red-600">
                                <i class="fa-solid fa-trash-can"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </x-card>

</x-layout>
