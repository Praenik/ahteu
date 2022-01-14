document.addEventListener('DOMContentLoaded', () => {
    // $('.switch-btn').click(function(){
    //     if ($(this).hasClass('switch-on')) {
    //         $(this).trigger('on.switch');
    //     } else {
    //         $(this).trigger('off.switch');
    //     }
    // });
    const toggler = document.querySelector('.switch-btn')
    toggler.addEventListener('click', () => {
        if (toggler.classList.contains('switch-on')) {
            console.log('contains')
            toggler.classList.add('switch-on')
            document.querySelector('body').classList.add('dark-theme')
        }
        else {
            console.log('not contains')
            toggler.classList.remove('switch-on')
            document.querySelector('body').classList.remove('dark-theme')
        }
    })
})
