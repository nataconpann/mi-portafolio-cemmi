const toogleBtn = document.querySelector('.toogle_btn')
const toogleBtnIcon = document.querySelector('.toogle_btn i')
const dropDownMenu = document.querySelector('.dropdown_menu')

toogleBtn.onclick = function(){
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('opne')

    toogleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}