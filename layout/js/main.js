
// my svg name animation starts here
const introName = document.querySelectorAll('#intro-name path');
for(let i = 0; i<introName.length; i++){
      console.log('Letter ${i} is ${introName[i].getTotalLength()}');
}
/*
var showTime;
function myIntro(){
      showTime = setTimeout(showPage, 6000);
}
function showPage(){
      document.getElementById("divIntro").style.display = "none";
      document.getElementById("myIndex").style.display = "block";
}*/


// navigation starts here

// Select DOM items
const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const menuBranding = document.querySelector('.menu-branding');
const navItems = document.querySelectorAll('.nav-item');

// Set intial state of menu
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu(){
    if(!showMenu){
        menuBtn.classList.add('close');
        menu.classList.add('show');
        menuNav.classList.add('show');
        menuBranding.classList.add('show');
        navItems.forEach(item => item.classList.add('show'));

        // Set Menu State
        showMenu = true;
    }
    else{
        menuBtn.classList.remove('close');
        menu.classList.remove('show');
        menuNav.classList.remove('show');
        menuBranding.classList.remove('show');
        navItems.forEach(item => item.classList.remove('show'));

        // Set Menu State
        showMenu = false;
    }
}

  // navigation ends here

//Collapsible starts here
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
//Collapsible ends here

//radar Chart Starts here
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'radar',

    // The data for our dataset
    data: {
        labels: [ "HTML5",
                  "CSS3",
                  "SASS",
                  "BOOTSTRAP",
                  "Javascript",
                  "JQUERY",
                  "Chart.js",
                  "Gulp.js",
                  "GSAP js",
                  "PHP",
                  "MySQLi",
                  "PDO",
                  "Wordpress",
                  "Photoshop",
                  "Adobe XD"],
        datasets: [{
            label: "My Skills",
            backgroundColor: 'rgba(254,62,85,0.2)',
            borderColor: 'rgb(254,62,85)',
            borderWidth: 2,
            data: [100, 80, 70, 80, 75, 70, 80, 65, 70, 75, 80, 60, 75, 80],
        }]
    },

    // Configuration options go here
    options: {
      scales: {
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 100
                }
        }
    }
});
//radar Chart Ends here

//mySnackBar Starts here
function mySnackBar() {
      // Get the snackbar DIV
      var x = document.getElementById("snackbar");
    
      // Add the "show" class to DIV
      x.className = "show";
    
      // After 3 seconds, remove the show class from DIV
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
//mySnackBar Ends here

  // nav animation

  TweenMax.from("#brand", 1, {
        delay: 0.4,
        y: 10,
        opacity: 0,
        ease: Expo.easeInOut
  })

  TweenMax.staggerFrom("#menu li a", 1, {
        delay: 0.4,
        opacity: 0,
        ease: Expo.easeInOut
  }, 0.1);
  // nav animation ends

  new WOW().init();
