$("a").click(function(){
  $(this).toggleClass("open");
  $("h1").addClass("fade");
});

/*==================== SHOW SCROLL UP ====================*/ 

function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');

    console.log("show log");
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)