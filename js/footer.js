document.addEventListener('DOMContentLoaded', () => {
    const bodyH = document.querySelector('body').clientHeight
    const footer = document.querySelector('.footer')
    if (bodyH < window.screen.availHeight) {
        footer.classList.add('bottom')
    }
})