@extends('layouts.page')
@section('pagecontent')
    <div class="w-full h-6/12 flex">
        <form action="/newcoin" method="POST" class="hide w-2/12 pl-5 h-12/12 border-r border-white" enctype="multipart/form-data">
            @csrf
            <div class="mt-5 pr-2 ">
                <h1 class="text-white text-2xl mt-2">New Coin</h1>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="name">Coin
                        Name</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" name="name">

                </div>


                <div class="mt-3">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="nameabr">Coin
                        Abreviation</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" name="nameabr">

                </div>

                <div class="mt-3">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="image" name="image" type="file">
                </div>




                <button type="submit"
                    class="mt-3 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Submit
                </button>
            </div>
        </form>

        <form action="/newtrade" method="POST" class="hide w-4/12 h-12/12 border-r border-white pl-5 h-full">
            @csrf
            <div class="mt-5 pr-2">
                <h1 class="text-white text-2xl mt-2">New Trade</h1>
                <label for="coins" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a
                    Coin</label>
                <select id="coins" name="coin"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Select Coin</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>



                <label for="conditions"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-2">Conditions</label>
                <textarea id="conditions" name="conditions" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here..."></textarea>

                <div class="relative z-0 w-full mb-5 group mt-4">
                    <input type="text" name="entryprice" id="entryprice"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="entryprice"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Entry
                        Price</label>
                </div>


                <fieldset>
                    <legend class="sr-only">Countries</legend>

                    <div class="flex items-center mb-4">
                        <input id="country-option-1" type="radio" name="type" value="Long"
                            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                        <label for="country-option-1"
                            class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                            Long
                        </label>
                    </div>

                    <div class="flex items-center mb-4">
                        <input id="country-option-2" type="radio" name="type" value="Short"
                            class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                        <label for="country-option-2"
                            class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Short
                        </label>
                    </div>

                </fieldset>



                <button type="submit"
                    class="mt-3 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Submit
                </button>
            </div>

            @if ($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif
        </form>

        <div class="hide w-6/12 pl-5 h-full">
            @csrf
            <div class="mt-5 pr-2 border-white">
                <h1 class="text-white text-2xl mt-2">Ongoing Trades</h1>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Coin
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Conditions
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Entryprice
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/closetrade" method="POST">
                                @foreach ($newtrades as $newtrade)
                                    @if ($newtrade->status == 'open')
                                        <tr
                                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                            <td class="px-6 py-4">{{ $newtrade->coin }}</td>
                                            <td class="px-6 py-4">{{ $newtrade->conditions }}</td>
                                            <td class="px-6 py-4">{{ $newtrade->entryprice }}</td>
                                            <td class="px-6 py-4">{{ $newtrade->type }}</td>

                                            <td class="px-6 py-4">
                                                <form action="/closetrade" method="POST">
                                                    @csrf
                                                    <button type="submit" href="#"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                        <label for="closetrade">Close</label>
                                                        <input name="closetrade" hidden value="{{ $newtrade->id }}"
                                                            type="text"></button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endif
                                @endforeach
                            </form>
                        </tbody>
                    </table>
                </div>

                </tbody>
                </table>








                </div>


                <div class="mt-3">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="nameabr">Coin
                        Abreviation</label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" name="nameabr">

                </div>

                <div class="mt-3">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="image" type="file">
                </div>




                <button type="submit"
                    class="mt-3 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Submit
                </button>
            </div>
        </form>

        </div>
    </div>
    <div class="w-full flex">
        <div class="w-6/12 mt-3">
            <h1 class="text-white text-2xl mt-2">Favourite trades</h1>
        </div>
        <div class="w-6/12 mt-3">
            <h1 class="text-white text-2xl mt-2">Trade History</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Color
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Category
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Price
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newtrades as $trade )
                            @if ($trade->status=='closed')
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $trade->coin }}"
                                </th>
                                <td class="px-6 py-4">
                                    {{ $trade->conditions }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $trade->entryprice }}
                                </td>
                                <td class="px-6 py-4">
                                    necessario exit price ao fechar
                                </td>
                                <td class="px-6 py-4">
                                    profit
                                </td>
                                <td class="px-6 py-4">
                                    {{ $trade->type }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
