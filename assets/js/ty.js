let menuButton = document.getElementsByClassName("menuButton")[0];
let menuRow = document.getElementsByClassName("menuRow")[0];
menuButton.onclick = () => {
    menuButton.classList.toggle("activeMenuButton");
    menuRow.classList.toggle("activeMenuRow");
}