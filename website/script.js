const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.buttonlogin-pop');
const iconClose = document.querySelector('.icon-close');
const profileSection = document.querySelector('.profile-section');

let isLoggedIn = false;

registerLink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
    profileSection.style.display = 'block';
});

loginLink.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
    profileSection.style.display = 'block';
    isLoggedIn = true;
});

btnPopup.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=>{
    wrapper.classList.remove('active-popup');
    profileSection.style.display = 'none';
});

const profileIcon = document.querySelector('.profile-icon');
const galleryIcon = document.querySelector('.gallery-icon');
const logoutIcon = document.querySelector('.logout-icon');


/* profileIcon.addEventListener('click', () => {
    if (isLoggedIn) {
        console.log('Go to profile');
    } else {
        console.log('Please log in to view the profile.');
    }
});

galleryIcon.addEventListener('click', () => {
    if (isLoggedIn) {
        console.log('Go to gallery');
    } else {
        console.log('Please log in to view the gallery.');
    }
});

logoutIcon.addEventListener('click', () => {
    if (isLoggedIn) {
        console.log('Logout');
        isLoggedIn = false;
        profileSection.style.display = 'none'; 
    } else {
        console.log('You are already logged out.');
    }
}); */

const tabs = document.querySelectorAll('[data-tab-target]');
const tabContents = document.querySelectorAll('.tab-pane');

tabs.forEach(tab => {
    tab.addEventListener('click', (e) => {
        e.preventDefault();
        const target = tab.dataset.tabTarget;

        tabContents.forEach(tabContent => {
            if (tabContent.id === target) {
                tabContent.style.display = 'block';
            } else {
                tabContent.style.display = 'none';
            }
        });
    });
});
