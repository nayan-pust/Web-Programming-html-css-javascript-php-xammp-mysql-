// Get form inputs
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const phoneInput = document.getElementById("phone");
const passwordInput = document.getElementById("password");
const maleInput = document.getElementById("male");


const errorname = document.getElementById("errorname");
const erroremail = document.getElementById("erroremail");
const errorphone = document.getElementById("errorphone");
const errorpassword = document.getElementById("errorpassword");

// Define validation functions
function validateName(name) {
    // const regex = /^[a-zA-Z]{6,}$/;
    const regex = /^[A-Za-z]/;
    return regex.test(name) && name.length >= 6;
}

function validatePassword(password) {
    return password.length >= 6;
}

function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validatePhone(phone) {
    return phone.length == 10;
}

// Define form submit event listener
const form = document.getElementById("registration-form");
form.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission    
    // Get input values
    const name = nameInput.value;
    const email = emailInput.value;
    const phone = phoneInput.value;
    const password = passwordInput.value;
    var gender = '';
    if (maleInput.checked) {
        gender = "Male";
    } else {
        gender = "Female";
    }


    let isValid = true;
    if (!validateName(name)) {
        errorname.innerHTML = "Enter Valid Name";
        isValid = false;
    } else {
        errorname.innerHTML = "";
    }
    if (!validatePassword(password)) {
        errorpassword.innerHTML = "Enter Valid Password";
        isValid = false;
    } else {
        errorpassword.innerHTML = "";
    }
    if (!validateEmail(email)) {
        erroremail.innerHTML = "Enter Valid Email";
        isValid = false;
    } else {
        erroremail.innerHTML = "";
    }
    if (!validatePhone(phone)) {
        errorphone.innerHTML = "Enter 10 digit Phone Number";
        isValid = false;
    } else {
        errorphone.innerHTML = "";
    }

    // Submit form if valid
    if (isValid) {
        const result = document.getElementById('show_result');

        result.innerHTML = `
         <ul type='none'>
			<li>
				Name : ${name}
			</li>
            <li>
				Email: ${email}
			</li>
            <li>
				Phone Number : ${phone}
			</li>
			<li>
				Password : ${password}
			</li>
            <li>
				Gender : ${gender}
			</li>		
			
			
		</ul>
        
        `;


    }

})

  // Validate inputs
