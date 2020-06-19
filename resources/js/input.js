//   gestisco il cambiamento degli input
const name = document.querySelectorAll('input[name="first_name"]');
const lastName = document.querySelectorAll('input[name="last_name"]');
const address = document.querySelectorAll('input[name="address"]');
const postCode = document.querySelectorAll('input[name="code"]');
const state = document.querySelectorAll('input[name="state"]');
const number = document.querySelectorAll('input[name="phone_number"]');
const job = document.querySelectorAll('input[name="job"]');


name.forEach(input =>{
    input.addEventListener('keyup', function () {
        if (this.value.match(/\d+/g) || this.value.match(/[#@\$!_\-\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
      })
})

lastName.forEach(input =>{
    input.addEventListener('keyup', function () {
        if (this.value.match(/\d+/g) || this.value.match(/[#@\$!_\-\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
      })
})

address.forEach(input =>{
    input.addEventListener('keyup', function () {
        if (this.value.match(/[@\$!_\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
      })
})

postCode.forEach(input =>{
    input.addEventListener('keyup', function () {
        if (this.value.match(/[a-zA-Z]/g) || this.value.match(/[#@\$!_\-\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
      })
})

state.forEach(input =>{
    input.addEventListener('keyup', function () {
        if (this.value.match(/[#@\$!_\-\?\"\'\+\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
      })
})

 number.forEach(input =>{
    input.addEventListener('keyup', function () {
        if (this.value.match(/[a-zA-Z]/g) || this.value.match(/[@\$!_\-\?\"\'\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
      })
})

job.forEach(input =>{
    input.addEventListener('keyup', function () {
        if (this.value.match(/[@\$!_\?\"\'\%\&\=\^\<\>\;\[\]\Ç\§]/g) || this.value == "") {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
      })
})

