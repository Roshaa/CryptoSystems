@extends('layouts.page')
@section('pagecontent')
<div class="w-full">
    <form action="" method="POST" class="w-full flex pl-5 h-full" enctype="multipart/form-data">
        @csrf
        <div class="mt-5 w-2/12">
            <div>
                <label class="text-white" for="name">Coin Name</label>
                <input class="float-end" type="text" name="name">

            </div>


            <div class="mt-3">

                <label class="text-white" for="nameabr">Coin Abreviation</label>
                <input class="float-end" type="text" name="nameabr">

            </div>

            <div class="mt-3">
                <label class="text-white" for="image">Choose Image:</label>
                <input class="p-2 text-white" type="file" id="image" name="image">
            </div>




            <button type="submit"
                class="border border-white rounded p-3 text-xl hover:bg-white hover:text-black text-white">Submit</button>

    </form>
</div>
@endsection
