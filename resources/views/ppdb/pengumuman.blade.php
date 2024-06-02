@extends('ppdb.layouts.app')

@section('content')
    <div class="pengumuman container">
        <div class="headpen">
            <p>PENGUMUMAN HASIL SELEKSI PPDB GOTHAM SCHOOL 2024</p>
        </div>
        <div class="countdown">
            <p>MENUJU PENGUMUMAN</p>
            <div class="waktu">
                <div class="wabox">
                    <p id="days">00</p>
                    Hari
                </div>
                <div class="wabox">
                    <p id="hours">00</p>
                    Jam
                </div>
                <div class="wabox">
                    <p id="minutes">00</p>
                    Menit
                </div>
                <div class="wabox">
                    <p id="seconds">00</p>
                    Detik
                </div>
            </div>
        </div>
        @if (Auth::check() && Auth::user()->role == 'admin')
            <form action="{{ route('ppdb.setCountdown') }}" method="POST" id="countdownForm">
                @csrf
                <input type="datetime-local" name="countdown_time" id="newDateTime" required>
                <button type="submit" id="submitCountdownBtn">Set Countdown</button>
            </form>
        @endif
        @if (Auth::check() && Auth::user()->role == 'user')
            <a href="{{route('ppdb.hasil')}}" class="lihatPengumuman">
                <p>Lihat Pengumuman</p>
        @endif
    </div>

    <script>
        var countdownTime = "{{ $countdownTime }}";
        var countdownDate = new Date(countdownTime).getTime();

        // Fungsi untuk memperbarui countdown setiap detik
        function updateCountdown() {
            var now = new Date().getTime();
            var selisih = countdownDate - now;

            var days = Math.floor(selisih / (1000 * 60 * 60 * 24));
            var hours = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((selisih % (1000 * 60)) / 1000);

            // Tampilkan countdown
            document.getElementById('days').innerText = days;
            document.getElementById('hours').innerText = hours;
            document.getElementById('minutes').innerText = minutes;
            document.getElementById('seconds').innerText = seconds;

            // Jika countdown berakhir
            if (selisih <= 0) {
                clearTimeout(timer);
                document.getElementById('days').innerText = 0;
                document.getElementById('hours').innerText = 0;
                document.getElementById('minutes').innerText = 0;
                document.getElementById('seconds').innerText = 0;

                // Tampilkan pengumuman
                var pengumumanElements = document.querySelectorAll('.lihatPengumuman');
                pengumumanElements.forEach(function(element) {
                    element.style.display = 'flex';
                });

                // Panggil backend untuk proses seleksi
                fetch("{{ route('ppdb.select.students') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            } else {
                // Perbarui setiap detik
                timer = setTimeout(updateCountdown, 1000);
            }
        }

        // Panggil fungsi untuk memulai countdown
        var timer = setTimeout(updateCountdown, 1000);
    </script>

@endsection
