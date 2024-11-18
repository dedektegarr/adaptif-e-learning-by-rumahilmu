
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login </title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bg.jpg') }}">

    <!-- stylesheets tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/output.css') }}">
    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <!-- tailwindcss flag-icon  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
        .custom-link {
          text-decoration: none;
        }

        .custom-link:hover {
          text-decoration: none;
        }

        .custom-link::after {
          content: "";
          display: block;
          width: 0;
          height: 2px; /* Lebar garis bawah */
          background-color: blue; /* Warna garis bawah */
          margin-top: 5px; /* Jarak vertikal antara garis dan teks */
          transition: width 0.3s;
        }

        .custom-link:hover::after {
          width: 100%; /* Panjang garis bawah saat dihover */
        }

        .input-file {
            width: 100%;
            padding: 0; /* Hapus padding jika ada */
            margin: 0; /* Hapus margin jika ada */
        }
          </style>
</head>

<body
    class="m-0 font-sans antialiased font-normal  bg-white text-start text-base leading-default text-slate-500 bg-pat">
    <main class="transition-all  duration-200 ease-soft-in-out h-full">
        <div class=" relative grid h-screen place-items-center  items-center p-0 overflow-hidden bg-center bg-cover ">
            <div class="container z-10">
                <div class="flex   ">
                    <div class=" flex flex-col w-full mx-auto md:flex-0 shrink-0 md:w-1/2
                        animate__fadeInLeft justify-center my-auto ">
                        <div
                            class=" flex flex-col   break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border ">
                            <div class="pb-0 mb-4 bg-transparent border-b-0 rounded-t-2xl w-full text-center flex flex-col items-center">
                                <img src="{{ asset('assets/img/logo.png') }}" style="height: 150px !important;" alt="" class="mb-3">
                                <h3 class="text-2xl md:text-2xl z-10 text-transparent bg-gradient-to-tl from-black to-blue-500 font-bold bg-clip-text">
                                    DAFTAR SEKARANG <br> ADAPTIF E-LEARNING BY RUMAH ILMU
                                </h3>
                            </div>

                            <div class="flex-auto pb-6 pl-6 pr-6 pt-0">
                                @if (session('error'))
                                    <div class="alert alert-danger mb-4 p-4 text-red-700 bg-red-100 rounded-lg">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                <form role="form" method="POST" action="{{ route('registrationPost') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2 flex flex-col md:flex-row">
                                        <div class="md:w-1/2 md:pr-2">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Nama Lengkap</label>
                                            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                                                class="focus:shadow-md focus:shadow-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 transition-all focus:border-blue-500"
                                                placeholder="Nama Lengkap" />
                                            <x-input-error :messages="$errors->get('nama_lengkap')" />
                                        </div>
                                        <div class="md:w-1/2 md:pl-2">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="focus:shadow-md focus:shadow-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 transition-all focus:border-blue-500"
                                                placeholder="Email" />
                                            <x-input-error :messages="$errors->get('email')" />
                                        </div>
                                    </div>
                                    <div class="mb-2 flex flex-col md:flex-row">
                                        <div class="md:w-1/2 md:pr-2">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Nomor Pokok Mahasiswa</label>
                                            <input type="text" name="username" value="{{ old('username') }}"
                                                class="focus:shadow-md focus:shadow-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 transition-all focus:border-blue-500"
                                                placeholder="Nomor Pokok Mahasiswa" />
                                            <x-input-error :messages="$errors->get('username')" />
                                        </div>

                                        <div class="md:w-1/2 md:pl-2">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Jenis Kelamin</label>
                                            <select name="jenis_kelamin"
                                                class="focus:shadow-md focus:shadow-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 transition-all focus:border-blue-500">
                                                <option disabled selected>-- select --</option>
                                                <option {{ old('jenis_kelamin') == "L" ? 'selected' : '' }} value="L">Laki-Laki</option>
                                                <option {{ old('jenis_kelamin') == "P" ? 'selected' : '' }} value="P">Perempuan</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('jenis_kelamin')" />
                                        </div>
                                    </div>
                                    <div class="mb-2 flex flex-col md:flex-row">
                                        <div class="md:w-1/2 md:pr-2">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Jalur Masuk Kuliah</label>
                                            <select name="jalur_masuk"
                                                class="focus:shadow-md focus:shadow-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 transition-all focus:border-blue-500">
                                                <option disabled selected>-- select --</option>
                                                <option {{ old('jalur_masuk') == "snmptn" ? 'selected' : '' }} value="snmptn">SNMPTN (Undangan)</option>
                                                <option {{ old('jalur_masuk') == "sbmptn" ? 'selected' : '' }} value="sbmptn">UTBK SBMPTN</option>
                                                <option {{ old('jalur_masuk') == "mandiri" ? 'selected' : '' }} value="mandiri">SELEKSI MANDIRI</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('jalur_masuk')" />
                                        </div>

                                        <div class="md:w-1/2 md:pl-2">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Rata-Rata Nilai Ujian Sekolah</label>
                                            <input type="text" name="rata_ujian" value="{{ old('rata_ujian') }}"
                                                class="focus:shadow-md focus:shadow-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 transition-all focus:border-blue-500"
                                                placeholder="Rata-Rata Nilai Ujian Sekolah" />
                                            <x-input-error :messages="$errors->get('rata_ujian')" />
                                        </div>
                                    </div>
                                    <div class="mb-2 flex flex-col md:flex-row">
                                        <div class="md:w-1/2 md:pr-2">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Password</label>
                                            <input type="password" name="password" value="{{ old('password') }}"
                                                class="focus:shadow-md focus:shadow-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 transition-all focus:border-blue-500"
                                                placeholder="Password" />
                                            <x-input-error :messages="$errors->get('password')" />
                                        </div>

                                        <div class="md:w-1/2 md:pl-2">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Password Confirmation</label>
                                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                                                class="focus:shadow-md focus:shadow-blue-500 block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 transition-all focus:border-blue-500"
                                                placeholder="Password Confirmation" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" />
                                        </div>
                                    </div>
                                    <div class="mb-4 md:flex">
                                        <div class="md:w-full">
                                            <label class="mb-2 text-sm font-bold text-slate-700">Foto Profil</label>
                                            <input type="file" name="foto"
                                            class="input-file focus:shadow-md focus:shadow-blue-500 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-blue-500 focus:outline-none focus:transition-shadow"
                                            aria-label="Foto Profil" aria-describedby="foto-profil-addon" />

                                            <x-input-error :messages="$errors->get('foto')" />
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="inline-block w-full px-6 py-3 mt-3 mb-0 font-bold text-center
                                            text-white uppercase align-middle transition-all bg-transparent border-0
                                            rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs
                                            ease-soft-in tracking-tight-soft bg-gradient-to-tl from-black to-blue-500
                                            hover:scale-105 hover:shadow-soft-xs active:opacity-85
                                            tracking-[3px]">Daftar</button>
                                            <p>Sudah Memiliki Akun? <a href="{{ route('login') }}" class="custom-link">Login Disini</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="w-full   lg:flex-0 shrink-0 md:w-1/2  ">
                        <div class="absolute top-0 hidden w-full h-full overflow-hidden -skew-x-12 ml-20 md:block
                            bg-[#152042]  " style="filter: drop-shadow(0px 0px 20px #666);">
                            <div
                                class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10  animate__fadeInRight ">

                                <div class="bg-gray-900 w-full h-full opacity-50"></div>
                            </div>
                        </div>
                        <lottie-player src="{{ asset('assets/img/animation-register.json') }}" background="transparent" speed="1" class="w-11/12 h-11/12 ml-20"
                            loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script>
    document.querySelector('input[name="foto"]').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const img = new Image();

    img.onload = function() {
        if (this.width > this.height) {
            alert('Gagal, foto harus persegi atau portrait.');
            event.target.value = ''; // Reset input file
        }
    };

    img.src = URL.createObjectURL(file);
});

</script>
</html>
