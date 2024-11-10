@extends('layouts.main')

@section('container')
    @include('partials.navbar')
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
