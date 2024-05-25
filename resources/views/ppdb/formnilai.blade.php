@extends('ppdb.layouts.app')

@section('content')
    <div class="dataform container">
        <div class="formbox">
            <div class="formbox-nav">
                <a href="{{route('ppdb.formdata')}}">
                    <div class="formnav">
                        Data Diri
                    </div>
                </a>
                <a href="{{route('ppdb.formnilai')}}">
                    <div class="formnav">
                        Nilai Raport
                    </div>
                </a>
                <a href="{{route('ppdb.formjurusan')}}">
                    <div class="formnav">
                        Jurusan
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
