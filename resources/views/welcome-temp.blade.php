@extends('layouts.plain')

@section('content')
    <div class="mb-4">
        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>

        <div class="container flex space-x-10 my-4 justify-center">
            <a href="#catalogs" class="link">Download Catalogs</a>
            <a href="#appointment" class="link">Schedule Appointment</a>
            <a href="#speakers" class="link">Watch Videos</a>
        </div>

        <img src="/images/covers/cover6.png" alt="cover" class="w-screen">

        <div class="container mt-5 mb-4 px-24" id="catalogs">
            <div class="border-b border-minart-color-1 h-1"></div>
        </div>

        <div class="text-center font-bold text-2xl">
            <h1 class="uppercase text-4xl">Catalogs</h1>
            <div class="leading-7">
                <div>Download Artwork Catalogs to view Artwork listings</div>
                <div>and details in six different Galleries of Davao.</div>
            </div>
            <a href="#" class="btn btn-outline-dark mt-4 px-10" role="button" aria-disabled="true">Download Catalog</a>
        </div>

        <div class="mt-5" id="appointment">
            <div class="text-center bg-minart-color-1 py-5 text-2xl font-bold">
                <div class="text-4xl">Visit Mindanao Art 2020 Exhibit via Appointment.</div>
                <a href="#" class="btn btn-outline-dark mt-4 px-10" role="button" aria-disabled="true">Schedule Appointment</a>
            </div>
        </div>

        <div class="mt-5" id="speakers">
            <div class="text-4xl text-center font-bold">
                Mindanao Art 2020 speakers
            </div>
            <div class="container mt-3">

                <div class="video-container mb-4">
                    <iframe width="904" height="509" src="https://www.youtube.com/embed/r3TZxgBmEZw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="video-container mb-4">
                    <iframe width="904" height="509" src="https://www.youtube.com/embed/m47vH3bhCsI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="video-container mb-4">
                    <iframe width="904" height="599" src="https://www.youtube.com/embed/WyraGm8_5js" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="video-container mb-4">
                    <iframe width="904" height="599" src="https://www.youtube.com/embed/rV6Wz_6osTg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: lightgray;">
            <div class="container p-4 flex">
                <h6><b>Copyright 2020. Mindanao Art</b></h6>
            </div>
        </div>
    </div>
@endsection
