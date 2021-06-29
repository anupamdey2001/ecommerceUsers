  //For disable copy paste
  window.onload = () => {
    const myInput = document.getElementById('confirmPassword');
    myInput.onpaste = e => e.preventDefault();
  }
