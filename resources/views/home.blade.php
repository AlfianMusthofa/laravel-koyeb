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

        <div class="container mx-auto border flex justify-between items-center pl-[20px] pt-[10px] rounded-[10px]">
            <div>
                <div>
                    <h1 class="text-[25px] text-[#484848] font-bold">Daftarkan Kost Anda di KostanKu</h1>
                    <p class="text-[#484848]">Berbagai fitur dan layanan untuk meningkatkan bisnis kost anda</p>
                </div>
                <div class="mt-[20px]">
                    <a href="#" class="text-[#1880e1] border px-[17px] py-[9px] text-[14px] font-semibold">Pelajari
                        Lebih Lanjut</a>
                </div>
            </div>
            <img src="{{ asset('assets/bb.png') }}" class="w-[250px]">
        </div>

        <div class="container mx-auto py-[20px]">
            <div class="border p-[15px] w-[900px] pl-[20px] rounded-[10px] shadow-md">
                <a href="#">
                    <div class="flex flex-col gap-[8px]">
                        <h1 class="text-[25px] text-[#484848] font-bold">Coba cara baru bayar kostan!</h1>
                        <p class="text-[#484848]">Biar bayar kost lebih gampang dan aman, coba sistem pembayaran khusus
                            untuk
                            anak kost.</p>
                        <p class="text-[#484848] text-[14px] underline font-semibold">Mau coba dong!</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="container mx-auto flex justify-between items-center border p-[15px] rounded-[10px] shadow-md">
            <div>
                <h1 class="text-[25px] text-[#484848] font-bold">Kost dikelola KostanKu</h1>
                <p class="text-[#484848]">Disurvey langsung oleh KostanKu, Lokasi terverifikasi, Bangunan kost lolos
                    seleksi.</p>
            </div>
            <div class="flex items-center gap-[20px]">
                <img src="{{ asset('assets/icons/apik.png') }}" class="w-[60px]">
                <img src="{{ asset('assets/icons/singgahsini.png') }}" class="w-[100px]">
            </div>
        </div>

        {{-- Main Content --}}
        <div class="pt-[20px]">
            <div class="container mx-auto">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-[4px]">
                        <h1 class="text-[#484848] text-[18px] font-semibold">Rekomendasi Kost di</h1>
                        <div class="relative">
                            <div class="flex items-center gap-[6px]">
                                <button class="text-[#1880e1] text-[18px] font-semibold" id="kost-location">Semua
                                    Kota</button>
                                <img src="{{ asset('assets/icons/drop-down-arrow.png') }}" class="w-[10px]">
                            </div>
                            <ul id="location-list" class="absolute border w-[160px] max-h-[98px] overflow-y-scroll hidden">
                                <li class="text-[#484848] cursor-pointer pl-[5px]" data-value=Semua%Kota>Semua Kota</li>
                                <li class="text-[#484848] cursor-pointer pl-[5px]" data-value=Jakarta>Jakarta</li>
                                <li class="text-[#484848] cursor-pointer pl-[5px]" data-value=Bandung>Bandung</li>
                                <li class="text-[#484848] cursor-pointer pl-[5px]" data-value=Bandung>Surabaya</li>
                                <li class="text-[#484848] cursor-pointer pl-[5px]" data-value=Semarang>Semarang</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="border px-[22px] text-[13px] py-[6px] text-[#484848]">Lihat Semua</a>
                    </div>
                </div>
                <div class="mt-[15px]">
                    <div class="flex gap-[10px] overflow-hidden overflow-x-scroll flex-nowrap">
                        <a href="#">
                            <div class="w-[267px]">
                                <img src="{{ asset('assets/banner.jpg') }}" class="h-[150px] rounded-[7px]">
                                <p class="border w-[50px] text-[14px] text-center mt-[8px] text-[#484848]">Putri</p>
                                <div class="mt-[3px]">
                                    <p class="text-[14px] text-[#484848] line-clamp-1">Kost Singgahsini Rungkut Asri Utara
                                        XI Tipe A
                                        Rungkut Surabaya N5H5D96K</p>
                                    <p class="text-[13px] text-[#484848] font-semibold">Kecamatan Depok</p>
                                    <div class="text-[#aeaeae] text-[12px] flex gap-[5px]">
                                        <p>Kasur</p>
                                        <p>WiFi</p>
                                        <p>Akses 24 Jam</p>
                                        <p>K.Mandi dalam</p>
                                        <p>AC</p>
                                    </div>
                                </div>
                                <h3 class="text-[#484848] font-semibold mt-[1px]">Rp1.313.000/bulan</p>
                                </h3>
                            </div>
                        </a>
                        <a href="#">
                            <div class="w-[267px]">
                                <img src="{{ asset('assets/banner.jpg') }}" class="h-[150px] rounded-[7px]">
                                <p class="border w-[50px] text-[14px] text-center mt-[8px] text-[#484848]">Putri</p>
                                <div class="mt-[3px]">
                                    <p class="text-[14px] text-[#484848] line-clamp-1">Kost Singgahsini Rungkut Asri Utara
                                        XI Tipe A
                                        Rungkut Surabaya N5H5D96K</p>
                                    <p class="text-[13px] text-[#484848] font-semibold">Kecamatan Depok</p>
                                    <div class="text-[#aeaeae] text-[12px] flex gap-[5px]">
                                        <p>Kasur</p>
                                        <p>WiFi</p>
                                        <p>Akses 24 Jam</p>
                                        <p>K.Mandi dalam</p>
                                        <p>AC</p>
                                    </div>
                                </div>
                                <h3 class="text-[#484848] font-semibold mt-[1px]">Rp1.313.000/bulan</p>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
