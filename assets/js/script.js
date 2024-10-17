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

//Accoridion 

// const accordions = document.querySelectorAll('.accordion-item');

// accordions.forEach(accordion => {
//     const header = accordion.querySelector('.accordion-header');
    
//     header.addEventListener('click', () => {
//         // Collapse all other sections
//         accordions.forEach(item => item.classList.remove('active'));

//         // Expand the clicked section
//         accordion.classList.add('active');
//     });
// });



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
gsap.from("#content1 h2", {
    duration: 1,
    // delay:1,
    opacity:0,
    y:200,
    // scrollTrigger: "#content1 "
    scrollTrigger:{
        trigger: "#content1 h2",
        scroller :"body",
        markers:true,
        start: "top 60%",

    }
});