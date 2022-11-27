@extends('belajar-template.template')
@section('content')
    <h1>Daftar mahasiswa angkatan 2020</h1>
    @foreach ($data as $setiap_data)
    <p>{{$setiap_data -> nama_mhs}} {{$setiap_data -> npm}} {{$setiap_data -> angkatan}}</p>
    @endforeach
@endsection
