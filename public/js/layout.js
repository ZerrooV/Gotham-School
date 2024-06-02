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

// =============== buat ganti judul filter jurusan ========================== //
document.addEventListener('DOMContentLoaded', (event) => {
    const jurusanSelect = document.getElementById('jurusan-select');
    const jurdul = document.getElementById('jurdul');

    jurusanSelect.addEventListener('change', function() {
        jurdul.textContent = this.options[this.selectedIndex].text;
    });
});


