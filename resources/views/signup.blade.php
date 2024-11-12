@extends('layouts.main')

@section('container')
    <div class="w-[100%] h-[100vh] flex justify-center items-center">
        <form action="" class="border p-[13px] w-[400px] flex flex-col gap-[12px] rounded-[5px] shadow-md">
            <div class="flex flex-col gap-[3px]">
                <label for="name" class="text-[13px] font-semibold">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="border text-[14px] p-[6px] rounded-[3px]"
                    @error('name')
                    {{ $message }}
                @enderror>
            </div>
            <div class="flex flex-col gap-[3px]">
                <label for="password" class="text-[13px] font-semibold">Password</label>
                <input type="password" name="password" id="password" class="border text-[14px] p-[6px] rounded-[3px]">
            </div>
            <div class="flex flex-col gap-[3px]">
                <label for="phone" class="text-[13px] font-semibold">Nomor Handphone</label>
                <input type="number" name="phone" id="phone" class="border text-[14px] p-[6px] rounded-[3px]">
            </div>
            <div class="flex flex-col gap-[3px]">
                <label for="gender" class="text-[13px] font-semibold">Gender</label>
                <select name="gender" id="gender" class="border p-[8px] text-[13px] rounded-[3px]">
                    <option value="Pria" class="text-[13px]">Pria</option>
                    <option value="Wanita" class="text-[13px]">Wanita</option>
                </select>
            </div>
            <div class="flex flex-col gap-[3px]">
                <label for="work" class="text-[13px] font-semibold">Pekerjaan</label>
                <select name="work" id="work" class="border p-[8px] text-[13px] rounded-[3px]">
                    <option value="Pilih salah satu" class="text-[13px]">Pilih salah satu</option>
                    <option value="Mahasiswa" class="text-[13px]">Mahasiswa</option>
                    <option value="Karyawan" class="text-[13px]">Karyawan</option>
                </select>
            </div>
            <div class="flex items-center gap-[10px] mt-[10px]">
                <input type="checkbox" name="privacy-policy" id="privacy-policy">
                <p class="text-[12px] text-[#a3a7b0]">Dengan klik saya setuju, saya menyatakan bahwa saya telah membaca dan
                    menyetujui <a href="#" class="underline text-[#1880e1]">Syarat & Ketentuan</a> serta <a
                        href="#" class="underline text-[#1880e1]">Kebijakan
                        Privasi</a> KostanKu</p>
            </div>
            <button type="submit" class="text-[13px] p-[7px] bg-[#1880e1] text-white rounded-[3px]"
                id="signup-btn">Daftar</button>
            <p class="text-[12px] text-center text-[#a3a7b0]">Sudah punya akun? <a href="/login-pencari"
                    class="text-[#1880e1] underline">Masuk</a></p>
        </form>
    </div>
@endsection
