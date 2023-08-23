<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ご利用予約') }}
        </h1>
    </x-slot>

    <div class="py-10 text-center">
        <h2 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('浜松市立第一小学校') }}のご予約
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h2>
    </div>

    <div class="py-10 text-left">
        <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="my-4">
            <div class="bg-white shadow p-6 rounded-lg">
                <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="font-bold text-xl inline-block relative inline-block">利用者様情報
                            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                        </label>
                        <br>
                        <br>
                        <input type="text" name="title" id="title" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="title" class="font-bold text-xl inline-block relative inline-block">利用者様情報
                            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                        </label>
                        <br>
                        <br>
                        <textarea name="body" id="body" rows="6" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="py-2 px-4 btn btn-primary">投稿する</button>
                        <a href="{{ route('post.index') }}" class="py-2 px-4 ml-4 btn btn-secondary">キャンセル</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

