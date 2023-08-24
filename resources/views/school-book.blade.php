<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ご利用予約') }}
        </h1>
    </x-slot>

    <div class="py-10 text-center">
        <h2 class="font-bold text-xl inline-block relative inline-block mx-24">
            {{ $school->name }}のご予約
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h2>
    </div>

    <div class="py-1 text-left mt-1">
        <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
            <div class="my-4">
                <div class="bg-white shadow p-6 rounded-lg">
                    <form method="POST" action="./booking-confirmation" class="grid grid-cols-[1fr_3fr] gap-x-8 gap-y-6">
                        @csrf

                        <h2 class="font-bold text-xl inline-block relative inline-block col-span-2">
                            利用者様情報
                            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                        </h2>

                        <label class="font-bold text-lg mr-2">氏名</label>
                        <input type="text" name="customer_name" class="border rounded p-1" placeholder="静岡太郎" required>

                        <label class="font-bold text-lg mr-2">電話番号</label>
                        <input type="tell" name="phone_number" class="border rounded p-1" placeholder="000-0000-0000" required>

                        <label class="font-bold text-lg mr-2">E-mail</label>
                        <input type="email" name="email" class="border rounded p-1" placeholder="me@example.com" required>

                        <br class="col-span-2">

                        <h2 for="title" class="font-bold text-xl inline-block relative inline-block col-span-2">
                            利用計画
                            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                        </h2>

                        <label class="font-bold text-lg mr-2">日付</label>
                        <input type="date" name="date" required>

                        <label class="font-bold text-lg mr-2">時間帯</label>
                        <div>
                            <input type="number" name="time_start" class="w-16 mr-2" min="0" max="23" required>時 〜 <input type="number" name="time_end" class="w-16 mx-2" min="0" max="23" required>時
                        </div>

                        <label class="font-bold text-lg mr-2">利用目的</label>
                        <select class="border rounded p-1" name="purpose_of_use">
                            <option selected></option>
                            <option>スポーツ</option>
                            <option>勉強会</option>
                            <option>会議</option>
                            <option>アート</option>
                            <option>地域独自イベント</option>
                        </select>

                        <label class="inline font-bold text-lg mr-4"><p class="w-fit">利用目的<br>(詳細)</p></label>
                        <textarea rows="6" name="details" class="inline border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required></textarea>

                        <p class="font-bold text-lg">利用設備</p>
                        <div>
                            <div class="flex flex-row-reverse w-fit items-center gap-x-3">
                                <label class="font-bold text-lg">体育館</label>
                                <input type="checkbox" name="selectedFacility.is_having_gym">
                            </div>

                            <div class="flex flex-row-reverse w-fit items-center gap-x-3">
                                <label class="font-bold text-lg">運動場</label>
                                <input type="checkbox" name="selectedFacility.is_having_ground">
                            </div>

                            <div class="flex flex-row-reverse w-fit items-center gap-x-3">
                                <label class="font-bold text-lg">駐車場</label>
                                <input type="checkbox" name="selectedFacility.is_having_parking">
                            </div>
                        </div>

                        <br class="col-span-2">

                        <h2 for="title" class="font-bold text-xl inline-block relative inline-block col-span-2">
                            利用規約
                            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                        </h2>

                        <div class="bg-white p-16 rounded shadow-md col-span-2">
                            <p class="text-center text-lg font-bold">{{ $school->terms }}</p>
                        </div>

                        <div class="flex flex-row-reverse w-fit gap-x-3 items-center mx-auto col-span-2">
                            <label class="text-center text-lg font-bold">同意する</label>
                            <input type="checkbox" id="consent-chk" required>
                        </div>

                        <script>
                            document.getElementById("consent-chk").addEventListener("change", function() {
                                document.getElementById("submit-btn").disabled = !this.checked;
                            }, false);
                        </script>

                        <br class="col-span-2">

                        <div class="mx-auto col-span-2">
                            <input type="submit" id="submit-btn" disabled="true" value="予約確認画面へ" class="font-bold rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border- gray-600 disabled:cursor-not-allowed active:shadow-none shadow-lg bg-gradient-to-tr from-gray-600 to-gray-500 border-gray-700 text-white">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
