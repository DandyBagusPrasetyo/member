@extends('layouts.auth', ['title' => 'Register - Member'])

@section('content')

    <!--<header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Member Area - Solidaritas Merah Putih Indonesia</h1>
        </a>
    </header> -->

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-center">Register to Solmet Member</h3>
        </section>

        <section class="mt-10">
            <form class="flex flex-col" method="POST" action="{{ route('register') }}">
                @csrf
                <span class="text-gray-700 text-xl">1. Informasi Login</span>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="name">Nama Lengkap</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('name')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="nik">NIK(Sesuai KTP/KK)</label>
                    <input type="text" name="nik" id="nik" value="{{ old('nik') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('nik')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('email')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>
                

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('password')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="password">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirm" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                </div>


                <span class="text-gray-700 text-xl">2. Data Diri(Sesuai KTP)</span>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="born_place">Foto Profile/Avatar</label>
                    <input type="file" name="avatar" id="avatar" value="{{ old('avatar') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('avatar')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="born_place">Foto KTP</label>
                    <input type="file" name="ktp" id="ktp" value="{{ old('ktp') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('ktp')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="born_place">Tempat Lahir</label>
                    <input type="text" name="born_place" id="born_place" value="{{ old('born_place') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('born_place')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="born_date">Tanggal Lahir</label>
                    <input type="date" name="born_date" id="born_date" value="{{ old('born_date') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('born_date')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="province">Provinsi</label>
                    <select name="province" id="province" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="city">Kota/Kabupaten</label>
                    <select name="city" id="city" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="district">Kecamatan</label>
                    <select name="district" id="district" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="village">Desa/Kelurahan</label>
                    <select name="village" id="village" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="postal_code">Kode Pos</label>
                    <select name="postal_code" id="postal_code" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="address">Alamat Lengkap</label>
                    <input type="text" name="address" id="address" value="{{ old('address') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('address')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="religion">Agama</label>
                    <select name="religion" id="religion" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="marriage">Status Perkawinan</label>
                    <select name="marriage" id="marriage" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                        <option value="Cerai">Cerai</option>
                    </select>
                </div>

                <span class="text-gray-700 text-xl">3. Pendidikan dan Pekerjaan</span>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="education">Pendidikan</label>
                    <select name="education" id="education" class="form-select bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="SD Sederajat">SD Sederajat</option>
                        <option value="SMP Sederajat">SMP Sederajat</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
                        <option value="Diploma">Diploma</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="profession">Pekerjaan</label>
                    <input type="text" name="profession" id="profession" value="{{ old('profession') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('profession')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <span class="text-gray-700 text-xl">4. Komunikasi dan Media Sosial</span>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="phone_1">No WhatsApp</label>
                    <input type="text" name="phone_1" id="phone_1" value="{{ old('phone_1') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('phone_1')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="phone_2">No Handphone</label>
                    <input type="text" name="phone_2" id="phone_2" value="{{ old('phone_2') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('phone_2')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" placeholder="https://www.facebook.com/id-facebook" value="{{ old('facebook') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('facebook')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="instagram">Instagram</label>
                    <input type="text" name="instagram" id="instagram" placeholder="@id-instagram" value="{{ old('instagram') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('instagram')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="twitter">Twitter</label>
                    <input type="text" name="twitter" id="twitter" placeholder="@id-twitter" value="{{ old('twitter') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('twitter')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <span class="text-gray-700 text-xl">5. Kontak Darurat</span>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="family_status">Status Keluarga</label>
                    <input type="text" name="family_status" id="family_status" value="{{ old('family_status') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('family_status')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="family_name">Nama Keluarga</label>
                    <input type="text" name="family_name" id="family_name" value="{{ old('family_name') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('family_name')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="family_phone">No Handphone Keluarga</label>
                    <input type="text" name="family_phone" id="family_phone" value="{{ old('family_phone') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3" required>
                    @error('family_phone')
                    <div class="inline-flex max-w-sm w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                        <div class="px-4 py-2">
                            <p class="text-gray-600 text-sm">{{ $message }}</p>
                        </div>
                    </div>
                    @enderror
                </div>

                <span class="text-gray-700 text-xl">6. Keorganisasian(Opsional)</span>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="org_experience">Pengalaman Organisasi</label>
                    <textarea name="org_experience" rows="4" cols="50" id="org_experience" value="{{ old('org_experience') }}" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-indigo-600 transition duration-500 px-3 pb-3">
                    </textarea>
                        @error('org_experience')
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
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Daftar</button>
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