<div class="logo">
    <img src="{{asset('assets/images/logo-secondary.svg')}}" alt="logo">
</div>

<div class="profil">
    <img src="{{Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/sidebar/Ellipse 6.svg')}}" alt="profil">

    <p id="label">
        {{Auth::user()->role}}
    </p>

    <h3 id="nama">
        {{Auth::user()->name}}
    </h3>

</div>

<div class="navigasi">
    <a href="{{route('ppdb.daftar')}}">
        <div class="navlink">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1m-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1"/></svg>
            Pendaftaran
        </div>
    </a>
    {{-- <a href="{{route('ppdb.pembayaran')}}">
        <div class="navlink">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M3.5 3A2.5 2.5 0 0 0 1 5.5V6h14v-.5A2.5 2.5 0 0 0 12.5 3zM15 7H1v3.5A2.5 2.5 0 0 0 3.5 13h9a2.5 2.5 0 0 0 2.5-2.5zm-4.5 3h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1"/></svg>
            Pembayaran
        </div>
    </a> --}}
    <a href="{{route('ppdb.listpen')}}">
        <div class="navlink">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 17h12a1 1 0 0 1 .117 1.993L15 19H3a1 1 0 0 1-.117-1.993zh12zm0-6h18a1 1 0 0 1 .117 1.993L21 13H3a1 1 0 0 1-.117-1.993zh18zm0-6h15a1 1 0 0 1 .117 1.993L18 7H3a1 1 0 0 1-.117-1.993zh15z"/></svg>
            List Pendaftar
        </div>
    </a>
    <a href="{{route('ppdb.pengumuman')}}">
        <div class="navlink">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><defs><mask id="ipSAnnouncement0"><g fill="none" stroke-linejoin="round" stroke-width="4"><rect width="40" height="26" x="4" y="15" fill="#fff" stroke="#fff" rx="2"/><path fill="#fff" stroke="#fff" stroke-linecap="round" d="m24 7l-8 8h16z"/><path stroke="#000" stroke-linecap="round" d="M12 24h18m-18 8h8"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSAnnouncement0)"/></svg>
            Pengumuman
        </div>
    </a>
</div>

