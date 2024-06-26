<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="text-right text-blue-400 text-base font-bold">
        <a href="/addpost"> 
            Post Something
        </a>
    </div>
    <article class ="py max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-2xl tracking-tigh font-bold text-gray-700">Hari Pertama</h2>
        <div class="text-base text-gray-400">
            <a>I Made Arudea Deniafinder Gotama </a> | 25 juni 2024
        </div>
        <p class = "my-4 font-light">
            saya melakukan instalasi dan konfigurasi singkat dari laragon, mempelajari struktur dasar folder laravel dan dasar dari blade template engine
        </p>
    </article>

    <article class ="py max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-2xl tracking-tight">Hari Kedua</h2>
        <div class="text-base text-gray-400">
            <a>I Made Arudea Deniafinder Gotama </a> | 26 juni 2024
        </div>
        <p class = "my-4 font-light">
            Saya mempelajari dasar dari blade component dan memasukkan data kedalam file view
        </p>
    </article>

    <article class ="py max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-2xl tracking-tight">Hari Pertama</h2>
        <p class = "my-4 font-light">
            saya melakukan instalasi dan konfigurasi singkat dari laragon dan penggunan dasar laravel untuk membuat beberapa web page simple
        </p>
    </article>
</x-layout>