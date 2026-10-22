const Slider = document.querySelector('.theme input') // the variable of colour slider is set to moniter user input
const root = document.querySelector(':root') // selects the main root for colour

Slider.addEventListener('input', () => { // event lister to detect for any input on the slider 
  const colourHue = Slider.value // detects the value(colour) ready to implement the change

  root.style.setProperty('--primary-color', `oklch(45.12% 0.267 ${colourHue})`) // sets the primary colour to whatever is set in the slider 
  root.style.setProperty('--secondary-color', `oklch(94.45% 0.03 ${colourHue})`)  // sets the secondary colour to whatever is set in the slider 
})
