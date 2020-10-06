let menu = document.getElementById('side-bar')

function handleClick() {
    if (menu.style.marginLeft == '0px') {
        menu.style.marginLeft = '-264px'
    }
    else {
        menu.style.marginLeft = '0px'
    }
}