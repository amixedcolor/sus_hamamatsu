<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('校舎詳細表示') }}
        </h1>
    </x-slot>

    <div class="py-10 text-center">
        <h2 class="font-bold text-3xl inline-block relative inline-block bg-orange-500 text-white p-2 rounded">
            {{ __('浜松市立第一小学校') }}
        </h2>
    </div>

    <!--
    <div class="container mx-auto w-96 h-96 bg-slate-600">
        <p class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('校舎画像等') }}
        </p>
    </div>
    -->

    <img src="{{ asset('img/kozuAPP97468.jpg') }}" class="mx-auto w-197 h-96">

    <div class="py-10 text-left">
        <h3 class="font-bold text-2xl inline-block relative inline-block mx-24">
        {{ __('費用（1時間）') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-xl mx-24">
            8500円
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-2xl inline-block relative inline-block mx-24">
        {{ __('設備') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-xl mx-24">
            ・体育館  ・運動場
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-2xl inline-block relative inline-block mx-24">
        {{ __('貸出時間') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-xl mx-24">
            12時〜18時
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-2xl inline-block relative inline-block mx-24">
        {{ __('連絡先') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-xl mx-24">
            020-2222-2222
        </p>
    </div>

    <div class="mb-4">
        <h3 for="body" class="font-bold text-2xl inline-block relative inline-block mx-24">
            備考
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-xl mx-24">
        運動場は広々としたグラウンドでスポーツイベントやレクリエーション活動が行えます。
        体育館は屋内施設で、バスケットボールやバレーボールなどのスポーツ活動やトレーニングに最適です。
        また，施設内外の清潔を保つため、ゴミは必ず指定の場所に捨ててください。
        そして，運動場や体育館内での利用は、他の利用者への配慮が必要です。
        ルールを守って楽しい時間を過ごしましょう。
        </p>
    </div>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="my-4 text-center">
        <a href="{{ route('school-book') }}" class="font-bold rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border-orange-600 active:shadow-none shadow-lg bg-gradient-to-tr from-orange-600 to-orange-500 border-orange-700 text-white text-2xl no-underline">
        <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
        <span class="relative">{{ __('予約する') }}</span>
        </a>
        </div>
    </div>
</x-app-layout>