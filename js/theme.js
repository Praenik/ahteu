document.addEventListener('DOMContentLoaded', () => {
    const toggler = document.querySelector('.switch-btn')
    let theme = document.cookie.match(/theme=(.+?)(;|$)/)
    if (theme === null) {
        theme = 'light'
    }
    if (theme[1] === 'dark') {
        toggler.classList.add('switch-on')
        document.querySelector('body').classList.add('dark-theme')
    }
    toggler.addEventListener('click', () => {
        if (toggler.classList.contains('switch-on')) {
            toggler.classList.remove('switch-on')
            document.querySelector('body').classList.remove('dark-theme')
            document.cookie = "theme=light; max-age=3600"
        }
        else {
            toggler.classList.add('switch-on')
            document.querySelector('body').classList.add('dark-theme')
            document.cookie = "theme=dark; max-age=3600"
        }
    })
})
