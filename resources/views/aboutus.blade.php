@extends('layouts.navbar')

@section('main-content')
    <div class="w-full">
        {{-- <img src="{{ asset('images/static/aboutus1.png') }}" class="absolute top-10 left-0 hidden lg:block" alt=""
            srcset=""> --}}
        {{-- <img src="{{ asset('images/static/aboutus2.png') }}" class="absolute bottom-10 right-0 hidden lg:block" alt=""
            srcset=""> --}}
        <div class="my-10 lg:mx-96 mx-24 w-full">
            <div class="text-4xl text-amber-500 font-semibold">About</div>
            <div class="text-7xl text-slate-700 font-bold">Valitech</div>
            <div class="div text-xl whitespace-break-spaces text-justify">
Valitech is a modern academic support system designed to simplify and enhance the student enrollment
experience. Built to streamline subject management through an intuitive kiosk-based platform, Valitech
empowers students to easily view, track, and print their current and upcoming semester subjects. By reducing
manual processes and minimizing errors, Valitech helps academic institutions operate more efficiently while
giving students quick and reliable access to the information they need.
            </div>
        </div>
        <div class="my-10 lg:mx-96 mx-24 w-full">
            <div class="text-4xl text-amber-500 font-semibold">Vision &</div>
            <div class="text-7xl text-slate-700 font-bold">MISSION</div>
            <div class="text-4xl mt-12 lg:mt-24 font-bold">
                Vision
            </div>
            <div class="div text-xl text-justify whitespace-break-spaces mt-4">
Our mission is to enhance the academic experience by delivering a secure, efficient, and user-friendly
system that simplifies subject enrollment and information access. We aim to support schools and students by
transforming complex administrative tasks into a smooth, automated workflow that promotes accuracy,
transparency, and ease of use.
            </div>
            <div class="text-4xl mt-12 font-bold">
                Mission
            </div>
            <div class="div text-xl text-justify whitespace-break-spaces mt-4">
Our vision is to become a leading digital solution for academic enrollment and subject management — one that
empowers educational institutions to embrace innovation. We envision a future where students can seamlessly
manage their academic journey through intelligent, reliable, and accessible technology, ultimately fostering
a more connected and technologically progressive learning environment.
            </div>
        </div>
    </div>
@endsection
