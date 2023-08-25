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
            Q. 何人でご利用されますか？
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
    </div>
    <div class="flex justify-center pt-12 pb-4 relative z-10">
    <a href="{{ url('question-of-fourth') }}" class="inline-flex items-center justify-center w-full h-44 text-4xl font-bold leading-6 text-white bg-orange-500 border border-transparent rounded-full md:w-auto hover:bg-orange-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-600 no-underline mx-5">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;未満&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
        <a href="{{ url('question-of-fourth') }}" class="inline-flex items-center justify-center w-full h-44 text-4xl font-bold leading-6 text-white bg-blue-500 border border-transparent rounded-full md:w-auto hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 no-underline mx-5">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以上&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
    </div>
</x-app-layout>
