const cookieBannerWrapper = document.querySelector('.cookie_banner_wrapper');
const cookieBanner = document.querySelector('.cookie_banner');
const declineBtn = document.querySelector('#decline');
const acceptBtn = document.querySelector('#accept');

window.addEventListener('load', () => {
    setTimeout(() => {
        cookieBannerWrapper.classList.add('active');
    }, 10000);
});
declineBtn.addEventListener('click', () => {
    cookieBannerWrapper.classList.remove('active');
    document.cookie = "Selvigtech=Selvigtech; max-age=" + 24 * 60 * 60;
});
acceptBtn.addEventListener('click', () => {
    cookieBannerWrapper.classList.remove('active');
    document.cookie = "Selvigtech=Selvigtech; max-age=" + 2160 * 60 * 60;
});
const WebsiteCookie = document.cookie.indexOf('Selvigtech');
if(WebsiteCookie !== -1) {
    cookieBannerWrapper.style.display = 'none';
} else
{
    cookieBannerWrapper.style.display = 'flex';
}