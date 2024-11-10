@extends('layouts.main')

@section('container')
    <div class="w-full h-[100vh] flex justify-center items-center">
        <div class="flex border rounded-[5px]">
            <img src="{{ asset('assets/bg.jpg') }}" alt="" class="w-[450px]">
            <div class="p-[10px] w-[450px] flex flex-col justify-center">
                <div class="flex items-center gap-[5px] justify-center">
                    <img src="{{ asset('assets/icons/building.png') }}" alt="" class="w-[20px]">
                    <p class="text-[12px] font-semibold">KostanKu</p>
                </div>
                <p class="text-center mt-[20px] text-[18px] font-semibold text-[#123b61]">Hai, Selamat Datang Kembali!</p>
                <p class="text-center mt-[5px] text-[11px] font-medium text-gray-400">Baru di KostanKu? <a href="#"
                        class="underline text-[#1880e1]">Daftar
                        Gratis</a></p>
                <form action="" method="post" class="text-center mt-[30px] flex flex-col gap-[10px] items-center">
                    <input type="text" name="name" id=""
                        class="border w-[300px] text-[13px] p-[8px] rounded-[3px] outline-[#1880e1]" placeholder="Nama">
                    <input type="password" name="password" id=""
                        class="border w-[300px] text-[13px] p-[8px] rounded-[3px] outline-[#1880e1]" placeholder="Password">
                    <button type="submit"
                        class="w-[300px] text-[12px] p-[8px] bg-[#1880e1] text-white rounded-[3px]">Masuk</button>
                    <div>
                        <a href="#" class="text-[12px] text-end underline font-bold text-[#1880e1]">Lupa kata
                            sandi?</a>
                    </div>
                    <p class="text-[11px] w-[300px] text-start text-[#a3a7b0]">Dengan melanjutkan, kamu menerima <a
                            href="#" class="text-[#1880e1] underline">Syarat
                            Penggunaan</a> dan <a href="#" class="text-[#1880e1] underline">Kebijakan Privasi</a>
                        kami.</p>
                </form>
            </div>
        </div>
    </div>
@endsection
