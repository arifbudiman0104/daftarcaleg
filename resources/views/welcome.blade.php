@extends('layouts.guest')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 relative">
    <div class="w-full h-screen sm:px-6">

        <section class="py-6 my-5 rounded-lg ">
            <div class="relative">
                <img class="h-auto w-screen pt-24 opacity-75 z-0 absolute object-center"
                    src="{{ asset('image/maps.png') }}" alt="Indonesia">
                <div
                    class="container mx-auto flex flex-col items-center justify-center  space-y-8 md:p-10 md:px-24 xl:px-48">
                    <h1 class="text-5xl z-10 font-bold leading-none text-center text-white">BERSAMA RAKYAT
                        MEMPERJUANGKAN

                    </h1>
                    <span class="text-5xl z-10 leading-none text-center text-red-500 font-bold">

                        PERUBAHAN DAN PERBAIKAN
                    </span>

                    <button
                        class=" text-xl z-10 font-medium text-white  rounded-full py-5 px-7 text-center bg-blue-500 hover:bg-blue-300">
                        <a href="/pendaftaran">DAFTAR CALEG SEKARANG</a>
                    </button>
                    {{-- <div class="">
                        <img class="h-auto md:h-60 lg:h-60 " src="{{ asset('image/maps.png') }}" alt="Indonesia">
                    </div> --}}


                </div>
                <div class="absolute z-10 pt-52 object-center  w-full">
                    <div class="flex justify-evenly">
                        <img class="h-36 w-36 md:h-60 md:w-60" src="{{ asset('image/ahy.jpeg') }}"
                            alt="Agus Hamurti Yodhoyono">
                        <img class="h-36 w-36 md:h-60 md:w-60" src="{{ asset('image/teuku.jpeg') }}"
                            alt="Teuku Riefky Harsya">

                        <img class="h-36 w-36 md:h-60 md:w-60" src="{{ asset('image/endang.jpeg') }}" alt="Muh. Endang">
                        <img class="h-36 w-36 md:h-60 md:w-60" src="{{ asset('image/budhi.jpeg') }}"
                            alt="S. Budhi Prasodjo">
                    </div>

                </div>
            </div>




        </section>
    </div>
</main>
@endsection
