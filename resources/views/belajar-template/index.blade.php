@extends('belajar-template.template')
@section('content')
    <h1>Perkuliahan</h1>
    <?php $date = date ('y-m-d'); ?>
    @if ($date=='2022-10-17')
        {{'hari ini kuliah WF'}}
    @else
        {{'hari ini tidak kuliah WF'}}
    @endif
@endsection
