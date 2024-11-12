@extends('layouts.main')

@section('container')
    <div class="border">
        <div class="container mx-auto flex justify-between items-center py-[12px]">
            <p class="font-bold text-[17px] text-[#1baa56]">KostanKu</p>
            <div class="navlinks flex items-center gap-[14px] text-[14px]">
                <div class="relative">
                    <button id="kosttype-button">Cari Apa?</button>
                    <div id="kosttype-list" class="absolute w-[200px] top-[40px] shadow-md hidden">
                        <a href="#" class="p-[6px] hover:bg-slate-100 block">Kost</a>
                        <a href="#" class="p-[6px] hover:bg-slate-100 block">Kost Singgahsini</a>
                        <a href="#" class="p-[6px] hover:bg-slate-100 block">Kost Andalan</a>
                        <a href="#" class="p-[6px] hover:bg-slate-100 block">Apartemen</a>
                    </div>
                </div>
                <a href="#">Pusat Bantuan</a>
                <a href="#">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center items-center">
        <div class="border w-[450px] mt-[30px] p-[13px] rounded-[6px] shadow-md">
            <a href="#"><img src="{{ asset('assets/icons/remove.png') }}" alt="" class="w-[25px]"></a>
            <p class="mt-[10px] text-[18px] font-bold">Masuk ke KostanKu</p>
            <p class="mt-[5px] text-[15px] text-[#404040]">Saya masuk sebagai</p>
            <div class="mt-[12px] flex flex-col gap-[10px]">
                <a href="/login-pencari">
                    <div class="p-[12px] flex items-center gap-[15px] shadow-md border">
                        <img src="{{ asset('assets/icons/rent.png') }}" alt="" class="w-[30px]">
                        <div>
                            <p class="text-[14px] font-semibold">Pencari Kost</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="p-[12px] flex items-center gap-[15px] shadow-md border">
                        <img src="{{ asset('assets/icons/key.png') }}" alt="" class="w-[30px]">
                        <div>
                            <p class="text-[14px] font-semibold">Pemilik Kost</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
