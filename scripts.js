// Theme Toggle: Switch between Light and Dark Mode
const themeToggle = document.getElementById('theme-toggle');
themeToggle.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
    if (document.body.classList.contains('dark-mode')) {
        themeToggle.textContent = '☀️ Mode clair';
    } else {
        themeToggle.textContent = '🌙 Mode sombre';
    }
});

// Highlight Active Link (optional enhancement)
const navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(link => {
    link.addEventListener('click', function () {
        navLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});
