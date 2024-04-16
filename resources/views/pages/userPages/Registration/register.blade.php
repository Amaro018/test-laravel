@extends('layout.layout')
@section('content')
    <div class="container p-4">
        <div class=" bg-white flex justify-center p-4">
            <h1 class="text-7xl font-bold">REGISTER</h1>
        </div>

        <div class="container bg-white flex justify-center mt-5">
            <div class="flex flex-col p-8 gap-10">
                <div class="flex justify-between gap-4">
                    <label class="font-bold">Full Name :</label>
                    <input type="text" class="border-2 border-black rounded-md">
                </div>
                <div class="flex justify-between gap-4">
                    <label class="font-bold">Username :</label>
                    <input type="text" class="border-2 border-black rounded-sm">
                </div>
                <div class="flex justify-between gap-4">
                    <label class="font-bold">Email Address :</label>
                    <input type="text" class="border-2 border-black">
                </div>
                <div class="flex justify-between gap-4">
                    <label class="font-bold">Password :</label>
                    <input type="text" class="border-2 border-black">
                </div>

                <div class="flex justify-between gap-4">
                    <label class="font-bold"> Confirm Password :</label>
                    <input type="text" class="border-2 border-black">
                </div>
            </div>
        </div>
    </div>
@endsection
