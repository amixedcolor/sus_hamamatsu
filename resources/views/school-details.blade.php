<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('校舎詳細表示') }}
        </h1>
    </x-slot>

    <div class="py-10 text-center">
        <h2 class="font-bold text-xl inline-block relative inline-block bg-orange-500 text-white p-2 rounded">
        {{ __('浜松市立第一小学校') }}
        </h2>
    </div>

    <div class="container mx-auto w-96 h-96 bg-slate-600">
        <p class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('校舎画像等') }}
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('費用（1時間）') }}
            <h3 class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></h3>
        </sph3an>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            5000円
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('設備') }}
            <h3 class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></h3>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            設備設備設備設備設備
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('貸出時間') }}
            <h3 class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></h3>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            X〜Y
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('連絡先') }}
            <h3 class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></h3>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            ○○○-○○○○-○○○○
        </p>
    </div>

    <div class="mb-4">
        <h3 for="body" class="font-bold text-xl inline-block relative inline-block mx-24">
            備考
            <h3 class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></h3>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考
        </p>
    </div>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="my-4 text-center">
            <a href="{{ route('home') }}" class="font-bold text-xl my-2 px-4 py-2 border-2 text-white rounded-md bg-orange-500" role="button">
                {{ __('予約する') }}
            </a>
        </div>
    </div>
</x-app-layout>