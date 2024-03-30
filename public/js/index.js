document.addEventListener("DOMContentLoaded", function() {
    const homeLink = document.querySelector('a[href="#home"]');
    homeLink.classList.add('active');
});

const navItems = document.querySelectorAll('.navlink ul li a');
navItems.forEach(item => {
    item.addEventListener('click', scrollToSection);
});

function scrollToSection(event) {
    event.preventDefault();
    const targetId = event.target.getAttribute('href');
    const targetSection = document.querySelector(targetId);
    window.scrollTo({
        top: targetSection.offsetTop - 50,
        behavior: 'smooth'
    });
}

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;
    document.querySelectorAll('section').forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.clientHeight;
        if (currentScroll >= sectionTop && currentScroll < sectionTop + sectionHeight) {
            const targetId = '#' + section.getAttribute('id');
            navItems.forEach(item => {
                item.classList.remove('active');
                if (item.getAttribute('href') === targetId) {
                    item.classList.add('active');
                }
            });
        }
    });
});
