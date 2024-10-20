// Cursor Code
const circle = document.querySelector('.circle');

document.addEventListener('mousemove', (e) => {
    const { clientX, clientY } = e;

    // Move the circle to follow the cursor
    circle.style.left = `${clientX - 20}px`; // Adjusted for smaller circle
    circle.style.top = `${clientY - 20}px`;  // Adjusted for smaller circle
});


//Image pushing pulling animation

        const imageBox = document.getElementById('imageBox');
        imageBox.addEventListener('mousemove', (event) => {
            const rect = imageBox.getBoundingClientRect();
            const xPos = event.clientX - rect.left;  // X position within the image
            const yPos = event.clientY - rect.top;   // Y position within the image
            const xPercent = (xPos / rect.width) * 100;  // X as percentage
            const yPercent = (yPos / rect.height) * 100; // Y as percentage

            // Calculate rotation angle based on cursor position
            const rotateX = (yPercent - 50) / 5;  // Inverse for top-to-bottom rotation
            const rotateY = (xPercent - 50) / -5; // Left-to-right rotation

            imageBox.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });

        imageBox.addEventListener('mouseleave', () => {
            // Reset the transformation when the cursor leaves the image
            imageBox.style.transform = 'rotateX(0deg) rotateY(0deg)';
        });


//Slider

$('.carousel-testimonial').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
})



$(document).ready(function(){
    $('.accordion-list > li > .answer').hide();
      
    $('.accordion-list > li').click(function() {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active").find(".answer").slideUp();
      } else {
        $(".accordion-list > li.active .answer").slideUp();
        $(".accordion-list > li.active").removeClass("active");
        $(this).addClass("active").find(".answer").slideDown();
      }
      return false;
    });
    
  });



/*============= Gsap ===========*/


gsap.from(".bannersec h1,.bannersec p,.bannersec button", {
    scrollTrigger:{
        trigger: ".bannersec",
        scroller :"body",
        start: "top 60%",
        ease: "circ.out",
    },
    duration: 1,
    stagger: 1,
    // stagger: ,
    opacity:0,
    y: 50,
    
});

gsap.from("#content1 h2", {
    scrollTrigger:{
        trigger: "#content1",
        scroller :"body",
        start: "top 60%",
        Stagger: 2,
        ease: "circ.out",
    },
    duration: 1,
    // stagger: ,
    opacity:0,
    y: 50,
    
});

gsap.from(".animated-image", {
    scrollTrigger:{
        trigger: "#cont2trigger",
        start: "top 60%",
        Stagger: 2,
        ease: "circ.out",
        x:10
    },
    duration: 1,
    // stagger: ,
    opacity:0,
    y: 50,
    
});

/*=================== Content 1 , Content 2 ====================*/

gsap.from("#lefth1",{
    x:100,
    stagger: 0.1, 
    duration:1,
    opacity:0,
    scrollTrigger:{
        trigger : "#cont2trigger",
         start:"top 40%",
    }

});

function breakTheTest2(){
    
    let h12 = document.querySelector(".lefth2");
    let righth12 = h12.textContent;
    let righth1split2 = righth12.split("");
    var clutter2 = "";
    
    righth1split2.forEach(function(el){
        // clutter2 +=  "hey"
        clutter2 +=  `<span>${el}</span>`
    });


    
    h12.innerHTML = clutter2;

    let h13 = document.querySelector(".lefth3");
    let righth13 = h13.textContent;
    let righth1split3 = righth13.split("");
    var clutter3 = "";
    
    righth1split3.forEach(function(el){
        // clutter3 +=  "hey"
        clutter3 +=  `<span>${el}</span>`
    });
    
    h13.innerHTML = clutter3;

    let h14 = document.querySelector(".lefth4");
    let righth14 = h14.textContent;
    let righth1split4 = righth14.split("");
    var clutter4 = "";
    
    righth1split4.forEach(function(el){
        // clutter4 +=  "hey"
        clutter4 +=  `<span>${el}</span>`
    });
    
    h14.innerHTML = clutter4;

    let h15 = document.querySelector(".lefth5");
    let righth15 = h12.textContent;
    let righth1split5 = righth15.split("");
    var clutter5 = "";
    
    righth1split5.forEach(function(el){
        // clutter5 +=  "hey"
        clutter5 +=  `<span>${el}</span>`
    });
    
    h15.innerHTML = clutter5;

};

    

breakTheTest2();

gsap.from(".lefth2 span",{

    stagger: 0.1,
    duration:1,
    opacity:0,
    rotateX:360,
    rotateY:360,
    y:200,
    scale: 3,    scrollTrigger:{
        trigger : "#cont3trigger",
        start:"top 40%",
    }

});

gsap.from(".lefth3 span",{

    stagger: 0.1,
    duration:1,
    opacity:0,
    rotateX:360,
    rotateY:360,
    y:- 200,
    scale: 2,    scrollTrigger:{
        trigger : "#cont3trigger",
         start:"top 40%",
    }

});

gsap.from(".lefth4 span",{

    stagger: 0.1,
    duration:1,
    opacity:0,
    rotateX:360,
    rotateY:360,
    y:200,
    scale: 2,    scrollTrigger:{
        trigger : ".servicebox3",
         start:"top 40%",
    }

});

gsap.from(".lefth5 span",{

    stagger: 0.1,
    duration:1,
    opacity:0,
    rotateX:360,
    rotateY:360,
    y:-200,
    scale: 2,    scrollTrigger:{
        trigger : ".servicebox4",
         start:"top 40%",
    }

});

gsap.from(".servicebox1",{

    stagger: 0.2    ,
    duration:1.5,
    opacity:0,
    // rotateX:360,
    // rotateY:360,
    y:200,
    scale: 1,    scrollTrigger:{
        trigger : "#cont3trigger",
         start:"top 40%",
    }

});


gsap.from(".servicebox2",{

    stagger: 0.2    ,
    duration:1.5,
    opacity:0,
    // rotateX:360,
    // rotateY:360,
    y:-200,
    scale: 1,    scrollTrigger:{
        trigger : "#cont3trigger",
         start:"top 40%",
    }

});

gsap.from(".servicebox3",{

    stagger: 0.2    ,
    duration:1.5,
    opacity:0,
    // rotateX:360,
    // rotateY:360,
    x:200,
    scale: 1,    scrollTrigger:{
        trigger : ".servicebox3",
         start:"top 60%",
    }

});

gsap.from(".servicebox4",{

    stagger: 0.2    ,
    duration:1.5,
    opacity:0,
    // rotateX:360,
    // rotateY:360,
    x:-200,
    scale: 1,    scrollTrigger:{
        trigger : ".servicebox3",
         start:"top 60%",
    }

});

gsap.from(".content2firdiv h1,content2firdiv button",{
    x:200,
    opacity: 0,
    stagger: 0.2,
    duration : 1,
    // repeat : -1,
    scrollTrigger : {
        trigger:".content2",
        start : "top 60%",
    }
});


/*============== Content 3 ===============*/
const timeline = gsap.timeline({
    scrollTrigger: {
        trigger: ".cont3",
        start: "top 13%",
        scrub: 1,
        pin: true,  
    }
});

// First animation for .cont3effect
timeline.from(".cont3effect", {
    opacity: 0,
    duration: 1,
    stagger: 1,
    rotateX: 200,
    x: 400,
})
// Second animation for .cont3img (will start after the first one finishes)
.to(".cont3img", {
    opacity: 0,
    scale: 3,
    duration: 3,
    stagger: 1,
    rotate: 90,
    // x: 200,
});


/*============= Content 4 =============*/
gsap.from(".pricesidediv",{
    y:200,
    opacity: 0,
    stagger: 0.1,
    duration : 1,
    // repeat : -1,
    scrollTrigger : {
        trigger:".content4",
        start : "top 50%",
    }
});

gsap.from(".cont4h1 span",{
    x:200,
    opacity:0,
    stagger : 0.1,
    duration : 1
})

gsap.from(".content4 h1,.content4 button",{
    y:200,
    opacity: 0,
    stagger: 0.1,
    duration : 1,
    // repeat : -1,
    scrollTrigger : {
        trigger:".content4",
        start : "top 80%",
    }
});

/*========== Content 5 ===============*/

gsap.from(".content5 h1,.content5 button",{
    x:200,
    opacity: 0,
    stagger: 0.1,
    duration : 1,
    // repeat : -1,
    scrollTrigger : {
        trigger:".content5",
        start : "top 60%",
    }
});

gsap.from(".accordion-list li",{
    x:-200,
    opacity: 0,
    stagger: 0.2,
    duration : 1,
    // repeat : -1,
    scrollTrigger : {
        trigger:".content5",
        start : "top 60%",
    }
});

/*=============== Content 6 =============*/

gsap.from(".cont6top h1,.cont6top button",{
    y:200,
    opacity: 0,
    stagger: 0.2,
    duration : 1,
    scrollTrigger : {
        trigger:".content6",
        start : "top 80%",
    }
});

gsap.from(".cont6blogsec img",{
    width: 0,
    x:200,
    opacity: 0,
    stagger: 0.2,
    duration : 1,
    scrollTrigger : {
        trigger:".cont6blogcontainer",
        start : "top 80%",
    }
});

gsap.from(".cont6blogsec button",{
    y:-200,
    opacity: 0,
    stagger: 0.2,
    duration : 1,
    scrollTrigger : {
        trigger:".cont6blogsec",
        start : "top 80%",
    }
});

/*============ News Letter ==============*/

gsap.from(".fc1div a",{
    x:-200,
    opacity: 0,
    stagger: 0.2,
    duration : 1,
    scrollTrigger : {
        trigger:".fc1div",
        start : "top 80%",
    }
});

gsap.from(".fc2div h4",{
    y:-200,
    opacity: 0,
    delay:1,
    // stagger: 0.2,
    duration : 2,
    // repeat : -1,
    scrollTrigger : {
        trigger:".fc1div",
        start : "top 80%",
    }
});
