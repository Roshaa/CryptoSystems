@extends('layouts.page')
@section('pagecontent')
    <div class="w-full flex">
        <div class="w-6/12 mt-3">
            <h1 class="text-2xl text-white pl-2">Strategies</h1>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-2 pr-2 pl-2">
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
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Wins
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Losses
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Winrate
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($strategies as $strategy)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    {{ $strategy->coin }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ $strategy->conditions }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ $strategy->type }}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ $strategy->wins }}
                                    <form method="POST" action="/incrementwin">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="incrementwin" value="{{ $strategy->id }}">
                                        <button type="submit"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Win</button>
                                    </form>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{ $strategy->losses }}
                                    <form method="POST" action="/incrementloss">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="incrementloss" value="{{ $strategy->id }}">
                                        <button type="submit"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Loss</button>
                                    </form>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    @if ($strategy->wins + $strategy->losses > 0)
                                        {{ round(($strategy->wins / ($strategy->wins + $strategy->losses)) * 100, 2) }}%
                                    @else
                                        N/A
                                    @endif
                                </th>
                            </tr>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
        <div class="w-6/12 mt-3 pr-2">
            <h1 class="text-white text-2xl mt-2">Trade History</h1>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Coin
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Strategy
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Type
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    EntryPrice
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    ExitPrice
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Profit
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($newtrades as $trade)
                            @if ($trade->status == 'closed')
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $trade->coin }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $trade->conditions }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $trade->type }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $trade->entryprice }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $trade->exitprice }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($trade->type == 'Short')
                                            {{ round((($trade->entryprice - $trade->exitprice) / $trade->entryprice) * 100, 2) }}%
                                        @else
                                            {{ round((($trade->exitprice - $trade->entryprice) / $trade->entryprice) * 100, 2) }}%
                                        @endif
                                    </td>
                                    
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="w-full flex">
        <div class="w-full h-6/12 flex">
            <form action="/newtrade" method="POST" class="hide w-4/12 h-12/12 pl-5 h-full">
                @csrf
                <div class="mt-5 pr-2">
                    <h1 class="text-white text-2xl mt-2">New Trade</h1>

                    <select id="coins" name="coin"
                        class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select Coin</option>
                        <option value="BTC">Bitcoin</option>
                        <option value="ETH">Ethereum</option>
                        <option value="ALT">PopularAlt</option>
                        <option value="SHIT">ShitCoin</option>
                    </select>
                    <div class="relative z-0 w-full mb-5 group mt-4">
                        <input type="text" name="entryprice" id="entryprice"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        <label for="entryprice"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Entry
                            Price</label>
                    </div>
                    <div class="mb-5">
                        <label for="large-input"
                            class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Conditions</label>
                        <input type="text" name="conditions" id="large-input"
                            class=" block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
            <div class="hide w-full pl-5 h-full">
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
                                        Strategy
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Entryprice
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Type
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Conditions
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
                                                <td class="px-6 py-4">{{ $newtrade->strategy_id }}</td>
                                                <td class="px-6 py-4">{{ $newtrade->entryprice }}</td>
                                                <td class="px-6 py-4">{{ $newtrade->type }}</td>
                                                <td class="px-6 py-4">{{ $newtrade->conditions }}</td>

                                                <td class="px-6 py-4">
                                                    <form action="/closetrade" method="POST">
                                                        @csrf
                                                        <input name="exitprice" type="number" step="0.01"
                                                            placeholder="Exit Price"
                                                            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-black placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                                        <button type="submit"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                            <label for="closetrade">Close</label>
                                                            <input name="closetrade" hidden value="{{ $newtrade->id }}">
                                                        </button>
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
            </div>
            </form>

        </div>
    </div>
    <div class="w-6/12 mt-5">
        <h1 class="text-2xl text-white pl-2">Add Strategy</h1>
        <form class="max-w-md ml-3" action="/newstrategy" method="POST">
            @csrf
            <select id="coins" name="coin"
                class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Select Coin</option>
                <option value="BTC">Bitcoin</option>
                <option value="ETH">Ethereum</option>
                <option value="ALT">PopularAlt</option>
                <option value="SHIT">ShitCoin</option>
            </select>
            <div class="mb-5">
                <label for="large-input"
                    class="mt-2 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Conditions</label>
                <input type="text" name="conditions" id="large-input"
                    class=" block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <select id="type" name="type"
                class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Select Type</option>
                <option value="Long">Long</option>
                <option value="Short">Short</option>
            </select>
            <button type="submit"
                class="mt-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>

    </div>
@endsection
