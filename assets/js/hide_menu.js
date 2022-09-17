function showmenu() {
  let x = document.querySelector('nav')
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

window.addEventListener('resize', function(event){
  let w = window.innerWidth;
  //let h = window.innerHeight;
  if(w > 768){
    document.querySelector('nav').style.display = "flex";
  } else{
    document.querySelector('nav').style.display = "none";
  }

})

function showpassword() {
  let x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

