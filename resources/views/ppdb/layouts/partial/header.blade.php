<div class="header">
    <div class="judul">
        <img src="{{asset('assets/images/Frame 30.svg')}}" alt="30">
        <p>Pendaftaran</p>
    </div>
    <div class="akun" id="akunDropdown">
        <img src="{{asset('assets/sidebar/Ellipse 6.svg')}}" alt="profil">
        <p>{{Auth::user()->name}}</p>
        <i class='bx bx-chevron-down'></i>
        <div class="dropdown-content" id="dropdownContent">
            <a href="#">Profil</a>
            <a href="{{route('logout')}}" id="logout">Logout</a>
        </div>
    </div>
</div>
