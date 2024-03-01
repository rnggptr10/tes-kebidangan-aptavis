<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Klasemen Sepakbola</title>
</head>

<body>

    <div class="w-max mx-auto   ">
        <h1 class="text-3xl font-bold">
            Klasemen Sepakbola
        </h1>
    </div>
    <div class="w-min mx-auto relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Klub
                    </th>
                    <th scope="col" class="px-6 py-3">
                        MA
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Me
                    </th>
                    <th scope="col" class="px-6 py-3">
                        S
                    </th>
                    <th scope="col" class="px-6 py-3">
                        K
                    </th>
                    <th scope="col" class="px-6 py-3">
                        GM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        GK
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Point
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($klubs as $index => $klub)
                    <tr
                        class="{{ $index % 2 === 0 ? 'bg-white' : 'bg-gray-100' }} border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $index + 1 }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $klub->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $klub->ma }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $klub->me }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $klub->s }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $klub->k }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $klub->gm }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $klub->gk }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $klub->point }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('klub') }}" type="button"
            class="my-2 text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
            Klub</a>
        <a href="{{ route('score') }}" type="button"
            class="my-2 text-white bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
            Skor Pertandingan</a>
    </div>

</body>

</html>
