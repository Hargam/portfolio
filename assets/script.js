//+ ----  CHECKS ON LOAD ----  +//

window.addEventListener('load', () => {

    //* CHECK DARK MODE *//
    if (localStorage.getItem('isDarkMode') == 'true') {
        toggleDarkMode();
    }
})

//+ ----  DARK MODE FUNCTION ----  +//

function toggleDarkMode() {

    //* DARK MODE COLORS *//
    document.body.classList.toggle('body-night');
    document.querySelector('header').classList.toggle('header-night');

    //* DARK MODE ICONS *//
    let darkModeIcons = document.querySelectorAll('.dark-mode i');

    for (let icon of darkModeIcons) {
        icon.classList.toggle('none');
    }
}

//+ ----  DARK MODE ON CLICK ----  +//

document.querySelector('.dark-mode').addEventListener('click', (e) => {

    //* STORE DARK MODE STATE *//
    if (localStorage.getItem('isDarkMode') == 'true') {
        localStorage.setItem('isDarkMode', false);
    }
    else {
        localStorage.setItem('isDarkMode', true);
    }

    toggleDarkMode();
})

//+ ----  DISPLAY CURRENT DATE  ----  +//


let currentYear = new Date().getFullYear();

document.getElementById('date').innerHTML = currentYear;