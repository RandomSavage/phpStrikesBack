const myFunction = ()=> {
  let menuBtn = document.querySelector('.menu-btn');
  let mobileMenu = document.querySelector('.navigation');
  if(mobileMenu.style.display = "none") {
    mobileMenu.classList.toggle('active');
    mobileMenu.style.display = "flex";
  } else {
    console.log("active");
  }
}
