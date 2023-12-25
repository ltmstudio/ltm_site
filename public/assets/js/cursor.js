// const cursorSmall = document.querySelector('.small');
// const cursorBig = document.querySelector('.big');


// const positionElement = (e)=> {
//   const mouseY = e.clientY;
//   const mouseX = e.clientX;
   
//   cursorSmall.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
  
//   cursorBig.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
 
// }

// window.addEventListener('mousemove', positionElement)

// const customCursor = document.getElementById('cursor');

// document.addEventListener('mousemove', (e) => {
//   customCursor.style.left = e.clientX + 'px';
//   customCursor.style.top = e.clientY + 'px';
//   document.getElementById('cursor-inner').style.left = e.clientX+'px';
//   document.getElementById('cursor-inner').style.top = e.clientY+'px';

// });

// UPDATE: I was able to get this working again... Enjoy!

var cursor = document.querySelector('.cursor-outer');
var cursorinner = document.querySelector('.cursor-inner');
var a = document.querySelectorAll('a');

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
});

document.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursorinner.style.left = x + 'px';
  cursorinner.style.top = y + 'px';
});

document.addEventListener('mousedown', function(){
  cursor.classList.add('click');
  cursorinner.classList.add('cursorinnerhover')
});

document.addEventListener('mouseup', function(){
  cursor.classList.remove('click')
  cursorinner.classList.remove('cursorinnerhover')
});

a.forEach(item => {
  item.addEventListener('mouseover', () => {
    cursor.classList.add('hover');
  });
  item.addEventListener('mouseleave', () => {
    cursor.classList.remove('hover');
  });
})


// const customCursor = document.querySelector('.cursor');

// document.addEventListener('mousemove', (e) => {
//     customCursor.style.left = e.clientX + 'px';
//     customCursor.style.top = e.clientY + 'px';
// });