@extends('layouts.main')

@section('container')
    <div class="bg-white">
        @include('partials.header')
        @include('partials.navbar')
        <div class="container mx-auto flex gap-[20px] justify-between items-center py-[20px]">
            <div class="flex flex-col gap-[13px]">
                <div class="leading-[30px]">
                    <h1 class="text-[30px] font-bold text-[#484848]">Mau cari Kostan?</h1>
                    <p class="text-[20px] text-[#484848]">Dapatkan infonya dan langsung sewa di kostanKu</p>
                </div>
                <div class="seacrh-container border flex items-center p-[3px] gap-[5px] w-[400px] shadow-md rounded-[3px]">
                    <img src="{{ asset('assets/icons/search.png') }}" class="w-[28px]">
                    <input type="search" name="search" class="w-full outline-none bg-white"
                        placeholder="Masukkan nama lokasi/kota">
                    <button class="bg-[#1880e1] px-[20px] py-[5px] text-white rounded-[3px]">Cari</button>
                </div>
            </div>
            <img src="{{ asset('assets/citybg.jpg') }}" class="w-[550px]">
        </div>
        <div class="container mx-auto py-[20px]">
            <div class="carousel carousel-end flex gap-[10px]">
                <div class="carousel-item">
                    <img src="{{ asset('assets/banner.jpg') }}" alt="Drink" class="w-[500px] rounded-[5px]" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/banner2.jpg') }}" alt="Drink" class="w-[500px] rounded-[5px]" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/banner3.jpg') }}" alt="Drink" class="w-[500px] rounded-[5px]" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/banner.jpg') }}" alt="Drink" class="w-[500px] rounded-[5px]" />
                </div>
            </div>
        </div>

        <footer class="footer footer-center bg-base-300 text-base-content p-4">
            <aside>
                <p>Copyright © 2024 - All right reserved by Alfnz Co. Ltd.</p>
            </aside>
        </footer>
    </div>
@endsection
