OpenMenu.addEventListener('click', () => {
    menu.style.display = 'flex'

    menu.style.right = (menu.offsetWidth * -1) +'px'

    OpenMenu.style.display = 'none'
    
    setTimeout(() =>{
        menu.style.opacity = '1'

        menu.style.right = '0'
    }, 10)
})

CloseMenu.addEventListener('click', () => {
    menu.style.opacity = '0'

    menu.style.rigth = (menu.offsetWidth * -1) + 'px'

    setTimeout(() => {
        menu.removeAttribute('style')
        OpenMenu.removeAttribute('style')
    }, 200)
})