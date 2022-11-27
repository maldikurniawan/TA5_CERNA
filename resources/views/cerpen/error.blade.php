@extends('layouts.app')
@section('SLOT')
<!-- component -->
<!-- MDI Icons -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

<!-- Page Container -->
<div class="flex items-center w-full justify-center min-h-screen bg-white py-0">
    <div class="flex flex-col min-h-screen">
        <!-- Error Container -->
        <div class="flex flex-col items-center">
            <hr class="h-32">
            <div class="text-indigo-500 font-bold text-7xl">
                404
            </div>

            <div class="font-bold text-3xl xl:text-7xl lg:text-6xl md:text-5xl mt-10">
                This page does not exist
            </div>

            <div class="text-gray-400 font-medium text-sm md:text-xl lg:text-2xl mt-8">
                The page you are looking for could not be found.
            </div>
        </div>
</div>
@endsection
