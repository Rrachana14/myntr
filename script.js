
// Access the Images
let slideImages = document.querySelectorAll('.slider img');
// Access the indicators
let dots = document.querySelectorAll('.dot');

var counter = 0;

function slideNext(){
    slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
    counter = (counter + 1) % slideImages.length;
    slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
    indicators();
}


// Auto slideing
function autoSliding(){
    setInterval(()=>{
        slideNext();
        indicators();
    },4000)
}
autoSliding();

// Add and remove active class from the indicators
function indicators(){
    for(let i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(' active', '');
    }
    dots[counter].className += ' active';
}

// Add click event to the indicator
function switchImage(currentImage){
    currentImage.classList.add('active');
    var imageId = currentImage.getAttribute('attr');
    if(imageId > counter){
        slideImages[counter].style.animation = 'next1 0.5s ease-in forwards';
        counter = imageId;
        slideImages[counter].style.animation = 'next2 0.5s ease-in forwards';
    }
    else if(imageId == counter){
        return;
    }
    else{
        slideImages[counter].style.animation = 'prev1 0.5s ease-in forwards';
        counter = imageId;
        slideImages[counter].style.animation = 'prev2 0.5s ease-in forwards';	
    }
    indicators();
}

//  LOGIC FOR CARD SLIDE

const categories = document.querySelectorAll('.category');

function forInitialize(){
    categories.forEach(category => {
        // autoMove();
        let cards = category.querySelectorAll('.cards');
        let cardsDot = category.querySelectorAll('.cdot');
        // console.log(cards,cardsDot);
        let cur = 0;

        //MOVING SLIDE FORWARD 
        function slideForward(){
            cards[cur].style.animation = 'next1  0.5s ease-in forwards';
            cur = (cur+1) % cards.length;
            cards[cur].style.animation = 'next2  0.5s ease-in forwards';
        }

        //FOR AUTO SLIDING AFTER EVERY 5SEC
        function autoMove(){
            setInterval(()=>{
                slideForward();
                cardIndicator();
            },5000);
        }

        //DOT INDICATOR
        function cardIndicator(){
            for(let i=0;i<cardsDot.length;i++){
                cardsDot[i].className = cardsDot[i].className.replace('active',"");
            }
            cardsDot[cur].className += 'active';
            console.log(cardsDot[cur].className);
        }

        autoMove();
    });
}
forInitialize();

//SCROLL TOP LOGI
document.querySelector('.scrolTop').addEventListener("click",()=>{
    document.querySelector('.main').scrollIntoView({behavior:"smooth"});
});


//controlling the left div after 930px
document.querySelector('.menu img').addEventListener('click',()=>{
    // document.querySelector('.left').style.display = 'block';
    document.querySelector('.left').style.left = '0%';
    document.body.classList.add('no-scroll');
});

document.querySelector('.cross').addEventListener('click',()=>{
        // document.querySelector('.left').style.display = 'none';
    document.querySelector('.left').style.left = '-100%';
    document.body.classList.remove('no-scroll');
});




function toggleAuthModal() {
    const modal = document.getElementById('authModal');
    modal.style.display = modal.style.display === 'block' ? 'none' : 'block';
  }
  
  function toggleAuthStatus() {
    const authStatus = document.getElementById('authStatus');
    authStatus.style.display =
      authStatus.style.display === 'block' ? 'none' : 'block';
  }

  function toggleAuthStatus() {
    const dropdown = document.getElementById("authStatus");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  }
  
  // Optional: Close authStatus if clicked outside
  window.addEventListener('click', function (e) {
    const profile = document.querySelector('.profile');
    const authStatus = document.getElementById('authStatus');
  
    if (!profile.contains(e.target) && !authStatus.contains(e.target)) {
      authStatus.style.display = 'none';
    }
  });
  


  // Check if username exists in localStorage
  window.addEventListener("DOMContentLoaded", () => {
    const username = sessionStorage.getItem("username");
    if (username) {
      document.getElementById("profileText").innerText = username;
    }
  });
  

  