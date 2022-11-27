@extends('layouts.app')
@section('SLOT')
<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<section class="relative  bg-blueGray-50">
<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('https://camo.githubusercontent.com/749bcebd43b284031014670a1377e8451c282d0c1d5cf25bdc5ea463d6ff0c44/68747470733a2f2f692e696d6775722e636f6d2f437a504745574b2e6a706567');
          ">
          <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                  Cerna
                </h1>
                <p class="mt-4 text-lg text-blueGray-200">
                  Cerpen sederhana atau Cerna adalah suatu aplikasi yang dapat membantu klien dalam mengembangkan bakatnya dalam menulis cerita pendek. Aplikasi ini juga dapat digunakan ketika waktu senggang agar lebih produktif.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-10 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Meningkatkan Pola Pikir</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Dengan menulis cerita fiksi, kamu akan dipaksa untuk bisa memikirkan jalan cerita yang baik. Sehingga jika kamu terbiasa menulis cerita fiksi, maka kamu akan meningkatkan pola berpikirmu.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                    <i class="fas fa-retweet"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Memperbaiki Cara Komunikasi</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Semakin rajin menulis cerita fiksi, maka kamu akan semakin baik dalam berkomunikasi. Alasannya sepele. Karena kamu akan terbiasa menyusun kalimat dengan baik. Kamu akan berpikir terlebih dahulu sebelum berbicara. Sehingga komunikasi yang kamu miliki akan semakin baik dan tentunya membuat kamu menjadi lebih bijaksana.
                  </p>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                    <i class="fas fa-fingerprint"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Berpengetahuan Luas</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Menulis cerita fiksi tidak hanya dipaksa harus memikirkan alur cerita yang baik, hal ini juga membuat kamu harus banyak melakukan riset. Bisa jadi karena setting kejadiannya berada di tempat yang tidak kamu kenal dengan baik sehingga perlu riset. Jika makin mahir membuat cerita fiksi, kamu akan semakin paham dengan pengetahuan umum yang ada pada dunia ini.
                  </p>
                </div>
              </div>
            </div>
          </div>
           <footer class="relative  pt-8 pb-6 mt-1">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          Made by Aldi TI20
        </div>
      </div>
    </div>
  </div>
</footer>
</section>
</section>
@endsection
