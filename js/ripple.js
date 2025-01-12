window.addEventListener("load", function () {


  ///////////////////////////////////////////////////////////////////////////////
  //Ripple effect--------------------------------------------------------------//
  ///////////////////////////////////////////////////////////////////////////////

  //Source: https://css-tricks.com/how-to-recreate-the-ripple-effect-of-material-design-buttons/

  function createRipple(event) {
    const button = event.currentTarget;
  
    const circle = document.createElement("span");
    const diameter = Math.max(button.clientWidth, button.clientHeight);
    const radius = diameter / 2;
  
    circle.style.width = circle.style.height = `${diameter}px`;
    circle.style.left = `${event.clientX - button.offsetLeft - radius}px`;
    circle.style.top = `${event.clientY - button.offsetTop - radius}px`;
    circle.classList.add("ripple");
  
    const ripple = button.getElementsByClassName("ripple")[0];
  
    if (ripple) {
      ripple.remove();
    }
  
    button.appendChild(circle);
  }
  
  const buttons = document.getElementsByClassName("btn");
  for (const button of buttons) {
    button.addEventListener("click", createRipple);
  }

});