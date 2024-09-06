window.addEventListener('scroll', function () {
  requestAnimationFrame(scrollFunction);
});

function scrollFunction() {
  var scrollVal = window.pageYOffset;
  var scrollSlow = scrollVal / 4;

  var triggerElement = document.querySelector('.about_company');

  if (triggerElement) {
    var triggerRect = triggerElement.getBoundingClientRect();

    if (triggerRect.top <= window.innerHeight && triggerRect.bottom >= 0) {
      var h2Width = 0;
      var h3Width = 0;
      if (window.innerWidth < 349) {
        console.log('что то меньше 349');
        h2Width = 64;
        h3Width = 70;
      }
      else if (window.innerWidth > 349 && window.innerWidth < 487) {
        console.log('что то больше 349 и меньше 487');
        h2Width = 90;
        h3Width = 64;
      } else if (window.innerWidth > 488 && window.innerWidth < 767) {
        console.log('что то меньше 767');
        h2Width = 72;
        h3Width = 54;
      }
      else if (window.innerWidth > 768 && window.innerWidth < 991) {
        console.log('что то больше 768 и меньше 991');
        h2Width = 52;
        h3Width = 42;
      } else if (window.innerWidth > 991) {
        console.log('что то больше 991');
        document.querySelectorAll('.title_back').forEach(function (element) {
          element.style.width = "0";
        });
        h2Width = 48;
        h3Width = 40;
      }

      // Применяем ширину элементов
      document.getElementById("h2").style.width = Math.min(Math.max(scrollSlow, 0), h2Width) + "%";
      document.getElementById("h3").style.width = Math.min(Math.max(scrollSlow, 0), h3Width) + "%";
      document.getElementById("h2Mobile").style.width = Math.min(Math.max(scrollSlow, 0), h3Width) + "%";
      document.getElementById("h3Mobile").style.width = Math.min(Math.max(scrollSlow, 0), h3Width) + "%";
    }
  }
}
