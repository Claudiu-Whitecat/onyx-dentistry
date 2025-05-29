
window.onload = () => {
    const body = document.querySelector('body')
    const hamburger = document.querySelector('.hamburger-menu');
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('is-active');
    })

    const dropdownButton = document.querySelector('button.has-submenu')
    const dropdownMenu = dropdownButton.nextElementSibling

    const handleBodyClick = e => {
        if (!e.target.closest('#dropdown')) {
            toggleDropdown()
        }
    }

    const toggleDropdown = () => {
        if (dropdownMenu.classList.contains('hidden')) {
            body.addEventListener('click', handleBodyClick)
        } else {
            body.removeEventListener('click', handleBodyClick)
        }
        dropdownButton.classList.toggle('is-active');
        dropdownMenu.classList.toggle('hidden')
        dropdownMenu.classList.toggle('is-active')
    }

    dropdownButton.addEventListener('click', e => {
        e.stopPropagation();
        toggleDropdown()
    });

}
