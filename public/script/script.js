let slideIndex = 0
let colorTheme = localStorage.getItem('theme')

carousel()





function carousel() {
  let i;
  let x = document.getElementsByClassName("slide_img")
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"
  setTimeout(carousel, 5000)
}
