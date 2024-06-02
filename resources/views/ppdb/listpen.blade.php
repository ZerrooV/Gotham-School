@extends('ppdb.layouts.app')

@section('content')
<div class="listpen container">
    <div class="toptable">
        <form id="jurusan-form" method="GET" action="">
            <p id="jurdul">{{ $selectedJurusan }}</p>
            <div class="filter-butt">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"/></svg>
                <select id="jurusan-select" name="jurusan" onchange="document.getElementById('jurusan-form').submit();">
                    <option value="Software Engineering" {{ $selectedJurusan == 'Software Engineering' ? 'selected' : '' }}>Software Engineering</option>
                    <option value="Cyber Security" {{ $selectedJurusan == 'Cyber Security' ? 'selected' : '' }}>Cyber Security</option>
                    <option value="Network System" {{ $selectedJurusan == 'Network System' ? 'selected' : '' }}>Network System</option>
                </select>
            </div>
        </form>
    </div>
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>No. </th>
                <th>Nama</th>
                <th>NISG</th>
                <th>Rerata</th>
            </tr>
        </thead>
        <tbody id="siswa-tbody">
            @foreach ($siswa as $item)
                <tr>
                    <td>{{$loop->iteration}}.</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['nisn']}}</td>
                    <td>{{$item['average_score']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('custom-js')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/datatables-simple-demo.js')}}"></script>
@endsection
