@extends('layouts.page')
@section('pagecontent')
    <div class="w-full h-6/12 flex">
        <form action="" method="POST" class="hide w-2/12 pl-5 h-full" enctype="multipart/form-data">
            @csrf
            <div class="mt-5 border-r pr-2 border-white">
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

        <form action="" method="POST" class="hide w-4/12 pl-5 h-full">
            @csrf
            <div class="mt-5 border-r pr-2 border-white">
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
                            <input type="text" name="entryprice" id="entryprice" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "/>
                            <label for="entryprice" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Entry Price</label>
                        </div>


                      <fieldset>
                        <legend class="sr-only">Countries</legend>
                      
                        <div class="flex items-center mb-4">
                          <input id="country-option-1" type="radio" name="type" value="Long" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                          <label for="country-option-1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                            Long
                          </label>
                        </div>
                      
                        <div class="flex items-center mb-4">
                          <input id="country-option-2" type="radio" name="type" value="Short" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                          <label for="country-option-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Short
                          </label>
                        </div>

                      </fieldset>



                <button type="submit"
                    class="mt-3 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Submit
                </button>
            </div>

            @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
        </form>

        <h1 class="text-white"> Ongoing trades</h1>
    </div>
    <div class="w-full">
        <form action="" method="POST" class="hide w-full pl-5 h-full">
            @csrf
            <div class="mt-5 pr-2 border-white">
                <h1 class="text-white text-2xl mt-2">Existing trades</h1>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a
                    Coin</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
    
    
    
                <label for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-2">Conditions</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here..."></textarea>
    
                <button type="submit"
                    class="mt-3 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Submit
                </button>
            </div>
        </form>
    </div>
    
@endsection
