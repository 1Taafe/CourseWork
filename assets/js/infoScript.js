let menuButton = document.getElementsByClassName("menuButton")[0];
let menuRow = document.getElementsByClassName("menuRow")[0];
menuButton.onclick = () => {
    menuButton.classList.toggle("activeMenuButton");
    menuRow.classList.toggle("activeMenuRow");
}

let infos = document.getElementsByClassName('info');

var isScrolling = false;
 
    window.addEventListener("scroll", throttleScroll, false);
 
    function throttleScroll(e) {
      if (isScrolling == false) {
        window.requestAnimationFrame(function() {
          scrolling(e);
          isScrolling = false;
        });
      }
      isScrolling = true;
    }
 
    document.addEventListener("DOMContentLoaded", scrolling, false);
 
    function scrolling(e) {
 
      for (var i = 0; i < infos.length; i++) {
        var infoItem = infos[i];
 
        if (isPartiallyVisible(infoItem)) {
          infoItem.classList.add("activePref");
        } else {
          infoItem.classList.remove("activePref");
        }
      }
      
    }
 
    function isPartiallyVisible(el) {
      var elementBoundary = el.getBoundingClientRect();
 
      var top = elementBoundary.top;
      var bottom = elementBoundary.bottom;
      var height = elementBoundary.height;
 
      return ((top + height >= 0) && (height + window.innerHeight >= bottom));
    }
 
    function isFullyVisible(el) {
      var elementBoundary = el.getBoundingClientRect();
 
      var top = elementBoundary.top;
      var bottom = elementBoundary.bottom;
 
      return ((top >= 0) && (bottom <= window.innerHeight));
    }