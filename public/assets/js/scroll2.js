// window.onscroll = function() {scrollFunction()};
// function scrollFunction() {
//     var scrollVal = window.pageYOffset;
//     var scrollSlow  = (scrollVal / 4);
//     document.getElementById("h2").style.width = Math.min(Math.max(scrollSlow, 0), 46) + "%";
//     document.getElementById("h3").style.width = Math.min(Math.max(scrollSlow, 0), 48) + "%";

// }



    // function changeWidth() {
    //   var scroll = (window.pageYOffset / 4);
    //   var width = scroll;
    //   // var width = Math.min(100 - scroll);

    //   document.getElementById('h2').style.width = width + '%';
    //   document.getElementById('h3').style.width = width + '%';

    // }

    // window.addEventListener('scroll', function(){
    //   requestAnimationFrame(changeWidth);
    // })



     window.addEventListener('scroll', function(){
          requestAnimationFrame(scrollFunction);
        })
// window.onscroll = function() {
//     scrollFunction();
//   };
  
  function scrollFunction() {
    var scrollVal = window.pageYOffset;
    var scrollSlow = scrollVal / 4;
  
    // Get the trigger element by class name
    var triggerElement = document.querySelector('.about_company');
  
    if (triggerElement) {
      // Get the position of the trigger element relative to the viewport
      var triggerRect = triggerElement.getBoundingClientRect();
  
      // Check if the trigger element is in the viewport
      if (triggerRect.top <= window.innerHeight && triggerRect.bottom >= 0) {
        // Perform your scroll action here, e.g., changing the width of the h1 element
        document.getElementById("h2").style.width = Math.min(Math.max(scrollSlow, 0), 46) + "%";
        document.getElementById("h3").style.width = Math.min(Math.max(scrollSlow, 0), 54) + "%";
        // var width = Math.min(Math.max(scrollSlow, 0), 46) + "%";
        // document.querySelectorAll('.title_back').forEach(function(element) {
        //   element.style.width = width;
        // });
      } else {
        // If the trigger element is not in view, set the width to zero
        document.querySelectorAll('.title_back').forEach(function(element) {
          element.style.width = "0";
        });
      }
    }
  }
  