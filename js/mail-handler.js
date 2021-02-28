

// alert("hola2");

function logSubmit(event) {
  console.log(`Form Submitted! Time stamp: ${event.timeStamp}`);
  event.preventDefault();
}

const form = document.getElementById('contact-form-submit-btn');
// const log = document.getElementById('log');
form.addEventListener('click', logSubmit);
