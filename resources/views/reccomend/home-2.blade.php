<x-app-layout>

<div class="relative bg-gray-200 p-4 rounded-md w-3/4 mx-auto my-8">
    <div class="absolute inset-0 bg-white opacity-80 shadow-lg rounded-md border-8 border-orange-500 w-100"></div>
    <div class="py-10 text-left relative z-10">
        <h2 class="inline-flex items-center justify-center px-5 py-3 text-4xl font-bold leading-6 text-white whitespace-no-wrap bg-orange-600 border border-orange-700 rounded-md shadow-sm mx-8">
            あなたに合った校舎が見つかる<br>
        </h2>
    </div>
    <div class="text-left relative z-10">
        <h3 class="font-bold text-3xl inline-block relative inline-block mx-12">
            Q. 予算はいくらですか？
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
    </div>
    <div class="flex justify-center pt-12 pb-4 relative z-10">
        <a href="/question-of-third" class="recommend-circle-1">
            5万円<br>以下
        </a>
        <a href="/question-of-third" class="recommend-circle-2">
            10万円<br>くらい
        </a>
        <a href="/question-of-third" class="recommend-circle-3">
            15万円<br>以上
        </a>
    </div>
</div>

<div>
        <div class="max-w-7xl mt-28 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ url('/schools') }}" class="bg-white border-b border-gray-200 p-6 block w-full text-center
                font-semibold text-gray-800 text-2xl hover:bg-gray-100 text-decoration-none">
                    校舎一覧はこちら
                </a>
            </div>
        </div>

        <div class="max-w-7xl mt-28 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ url('/held-events') }}" class="bg-white border-b border-gray-200 p-6 block w-full text-center
                font-semibold text-gray-800 text-2xl hover:bg-gray-100 text-decoration-none">
                    過去に開催されたイベントの一覧はこちら
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
