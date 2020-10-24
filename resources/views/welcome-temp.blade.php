@extends('layouts.plain')

@section('content')
    <div>
        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>

        <div class="container flex space-x-10 my-4 justify-center">
            <a href="#">Download Catalogs</a>
            <a href="#">Schedule Appointment</a>
            <a href="#">Watch Videos</a>
        </div>

        <img src="/images/covers/cover6.png" alt="cover" class="w-screen">

        <div class="container mt-5 mb-4 px-24">
            <div class="border-b border-minart-color-1 h-1"></div>
        </div>

        <div class="text-center font-bold text-2xl">
            <h1 class="uppercase text-4xl">Catalogs</h1>
            <div class="leading-7">
                <div>Download Artwork Catalogs to view Artwork listings</div>
                <div>and details in four different Galleries of Davao.</div>
            </div>
            <a href="#" class="btn btn-outline-dark mt-4 px-10" role="button" aria-disabled="true">Download Catalog</a>
        </div>

        <div class="mt-5">
            <div class="text-center bg-minart-color-1 py-5 text-2xl font-bold">
                <div class="text-4xl">Visit Mindanao Art 2020 Exhibit via Appointment.</div>
                <a href="#" class="btn btn-outline-dark mt-4 px-10" role="button" aria-disabled="true">Schedule Appointment</a>
            </div>
        </div>

        <div class="mt-5">
            <div class="text-4xl text-center font-bold">
                Mindanao Art 2020 speakers
            </div>
            <div class="container grid grid-flow-row grid-cols-2 grid-rows-2 mt-3">
                {{-- <div class="mr-2 mb-2" style="height: 307px;">
                    <video width="547" height="307">
                        <source src="/videos/al_ryan.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="mb-2" style="height: 307px;">
                    <video controls width="547" height="307">
                        <source src="/videos/danny_rayos_del_sol.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="mr-2" style="height: 307px;">
                    <video controls width="547" height="307">
                        <source src="/videos/manalo.mp4" type="video/mp4">
                    </video>
                </div>
                <div style="height: 307px;">
                    <video controls width="547" height="307">
                        <source src="/videos/baste_speech.mp4" type="video/mp4">
                    </video>
                </div> --}}
                <div class="video-container mb-4">
                    <iframe width="535" height="307" src="https://www.youtube.com/embed/r3TZxgBmEZw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="video-container mb-4">
                    <iframe width="535" height="307" src="https://www.youtube.com/embed/m47vH3bhCsI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="video-container mb-4">
                    <iframe width="535" height="307" src="https://www.youtube.com/embed/WyraGm8_5js" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="video-container mb-4">
                    <iframe width="535" height="307" src="https://www.youtube.com/embed/rV6Wz_6osTg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="p-4 flex bg-gray-400">
            <div class="container text-right font-bold">
                Copyright 2020. Mindanao Art
            </div>
        </div>
    </div>
@endsection
