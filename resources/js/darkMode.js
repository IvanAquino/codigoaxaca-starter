const applySystemTheme = () => {
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.body.classList.add('dark');
    } else {
        document.body.classList.remove('dark');
    }
};

window.toggleDarkMode = function () {
    const body = document.body;
    body.classList.toggle('dark');

    if (body.classList.contains('dark')) {
        localStorage.setItem('darkMode', 'enabled');
    } else {
        localStorage.setItem('darkMode', 'disabled');
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    let darkMode = localStorage.getItem('darkMode');

    if (darkMode === 'enabled') {
        document.body.classList.add('dark');
    }

    if (darkMode === 'system' || darkMode === null) {
        applySystemTheme();
    }
});