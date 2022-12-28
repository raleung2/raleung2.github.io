function clicked () {
  console.log('in clicked');
  const hamburger = document.getElementById('hamburger');
  const navUL = document.getElementById("nav-ul");
  navUL.classList.toggle('show');
}