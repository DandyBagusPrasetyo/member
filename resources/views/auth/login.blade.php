@extends('layouts.auth', ['title' => 'Login - Member'])

@section('content')

    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Member Area - Solidaritas Merah Putih Indonesia</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">Welcome to Solmet Member Area</h3>
            <p class="text-gray-600 pt-2">Silahkan masuk ke akun anggota anda.</p>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="nik">NIK atau Email</label>
                    <input type="text" name="nik" id="nik" value="{{ old('nik') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                    @error('nik')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>
                

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                    @error('password')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>
                

                <div class="flex justify-end">
                    <a href="/forgot-password" class="text-sm text-red-600 hover:text-red-700 hover:underline mb-6">Lupa password?</a>
                </div>
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Masuk</button>
            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-black text-2xl">Ingin bergabung menjadi anggota? <a href="/register" class="font-bold hover:underline text-red-500">Daftar disini</a>.</p>
    </div>

    <footer class="max-w-lg mx-auto flex justify-center text-black">
        <a href="#" class="hover:underline">Contact</a>
        <span class="mx-3">•</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>

@endsection