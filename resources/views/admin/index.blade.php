@extends('admin.master')

@section('title')
    Admin Page
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
        <h3 class="title-5 m-b-35"> Selamat Datang</h3>
        <p>Anda login sebagai <span style="font-style:italic; font-size:24px;"> : {{ Auth::user()->name }}</span></p>
        </div>
    </div>

@endsection



