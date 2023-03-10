<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
<div
    class="font-Poppins bg-darkblue selection:text-secondary selection:bg-darkblue min-h-screen h-screen"
>
    <nav
        class="flex justify-between flex-row px-12 h-16 items-center bg-secondary"
    >
        <div class="logo mx-auto">
            <a href="/">
                <img src="{{ asset('/assets/LogoWhite.png') }} " alt="Logo ITFEST 2022" />
            </a>
        </div>
    </nav>
    <div class="p-5">
        @if($message = Session::get('berhasil'))
        <div class="bg-teal-100 w-1/3 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mx-auto" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">Data berhasil ditambahkan</p>
                    <p class="text-sm">{{$message}}</p>
                </div>
            </div>
        </div>
        @endif
        <form action="{{route('upadmin')}}" class="grid justify-center" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nama" class="text-slate-100">Nama Peserta</label>
            @error('nama')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input
                type="text"
                class="form-input rounded mb-2 max-w-sm"
                name="nama"
            />
            <label for="nama_gambar" class="text-slate-100">Nama Gambar</label>
            @error('nama_gambar')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input
                type="text"
                class="form-input rounded mb-2 max-w-sm"
                name="nama_gambar"
            />
            <label for="desc" class="text-slate-100">Deskripsi</label>
            @error('desc')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <textarea class="form-input rounded mb-2 max-w-sm" name="desc">

            </textarea>
            <label class="text-slate-100" for="gambar">Gambar</label>
            @error('gambar')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input
                class="block w-full text-lg text-gray-500 bg-gray-300 rounded cursor-pointer focus:outline-none"
                aria-describedby="file_input_help"
                name="gambar"
                accept="image/*"
                type="file"
            />
            <p
                class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                id="file_input_help"
            >
                PNG atau JPG.
            </p>

            <button
                type="submit"
                class="text-slate-50 bg-accent rounded max-w-sm p-1 mt-4"
            >
                Upload
            </button>
        </form>
    </div>
</div>
</body>
</html>
