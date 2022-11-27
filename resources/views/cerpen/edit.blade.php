@extends('layouts.app')
@section('SLOT')
<div class="w-full items-center justify-start bg-white">
    <div class="mx-auto w-full min-h-screen">
        <h1 class="text-4xl text-center font-medium">Cerpen Sederhana</h1>
        <p class="mt-3 p-3">“Bermimpilah! Jangan mendahului nasibmu, jangan belum apa-apa bilang gak bisa.” - Andrea Hirata.</p>

        <form action="{{route('cerpen.update', ['cerpen' => $cerpen->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="grid gap-6 sm:grid-cols-2">
                <div class="relative z-0">
                    <input type="text" name="judul" value={{$cerpen->judul}}
                        class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                        placeholder=" " />
                    <label
                        class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Judul</label>
                        @error('judul')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                </div>
                <div class="relative z-0">
                    <input type="date" name="tanggal" value={{$cerpen->tanggal}}
                        class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                        placeholder=" " />
                    <label
                        class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"></label>
                        @error('tanggal')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                </div>
                <div class="relative z-0 col-span-2">
                    <textarea name="isi" rows="5"
                        class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                        placeholder=" ">{{$cerpen->isi}}</textarea>
                    <label
                        class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Isi</label>
                        @error('isi')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                </div>
            </div>
            <button type="submit" class="mt-5 rounded-md bg-black px-10 py-2 text-white">Update</button>
        </form>
    </div>
</div>
@endsection
