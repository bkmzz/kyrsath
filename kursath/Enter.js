function registermenu(){
  location.href = "Registration.html"
}
function mainmenu(){
  location.href = "index.html"
}

/*Реклама*/
let banner_container = document.querySelector('.banner-container');
let number = 2;
function autoSlider() {
  let timer = setTimeout(function() {
    // console.log(banner_container.children);
    banner_container.children[number].style.opacity = 0;
    number--;

    if(number < 0) {
      for(let i = 0; i<banner_container.children.length; i++) {
        banner_container.children[i].style.opacity = 1;
      }
      number = 2;
      clearTimeout(timer);
    }
    autoSlider();
  }, 5500);
}
autoSlider();
