// =============== FUNGSI BUAT HEADER ========================== //
// DOM Dropdown AKUN
document.addEventListener('DOMContentLoaded', function() {
    const akunDropdown = document.getElementById('akunDropdown');
    const dropdownContent = document.getElementById('dropdownContent');

    akunDropdown.addEventListener('click', function() {
        dropdownContent.classList.toggle('show');
    });

    window.addEventListener('click', function(event) {
        if (!akunDropdown.contains(event.target)) {
            dropdownContent.classList.remove('show');
        }
    });
});
// DOM ganti judul
document.addEventListener('DOMContentLoaded', function() {
    const judulElement = document.querySelector('.judul p');
    const sidebarLinks = document.querySelectorAll('.navigasi .navlink');

    // Function to set page title based on session storage
    function setPageTitleFromSession() {
        const teksNavlink = sessionStorage.getItem('activeNavLinkText');
        if (teksNavlink) {
            judulElement.textContent = teksNavlink;
        }
    }

    // Set page title from session storage when the DOM is loaded
    setPageTitleFromSession();

    // Add event listeners to update session storage and page title when a navigation link is clicked
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            const teksNavlink = this.textContent.trim();
            judulElement.textContent = teksNavlink;
            sessionStorage.setItem('activeNavLinkText', teksNavlink);
        });
    });
});

// DOM Active state sidebar TAPI GABISA
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.navigasi .navlink');
    const currentUrl = window.location.href;

    navLinks.forEach(link => {
        if (link.parentNode.href === currentUrl) {
            link.classList.add('active');
        }

        link.addEventListener('click', function () {
            navLinks.forEach(nav => nav.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

//DOM buat active state formbox-nav


// DOM buat COUNTDOWN waktu di Pengumuman
var countdownDate = new Date("Jully 1, 2024 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countdownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    if (distance < 0) {
        clearInterval(x);
        document.querySelector(".countdown").innerHTML = "Pengumuman Telah Dimulai!";
    }
}, 1000);


