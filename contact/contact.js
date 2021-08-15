const contact = document.getElementById('contact');
const contactSubmit = document.getElementById('contact-submit');

contact.addEventListener('submit', e => {
	e.preventDefault();
	console.log("!!!!!!!!!!!!!!!!!!");
});

contactSubmit.addEventListener("click", function () {
	const requestContact = new XMLHttpRequest();

	requestContact.onload = () => {
		let responseObject = null;

		try {

		responseObject = JSON.parse(requestContact.responseText);
		console.log(responseObject);


		if(responseObject.success) {
			var successMessage = document.getElementById('success');
			successMessage.textContent = responseObject.success;
		}

		if(responseObject.mailError || responseObject.emptyErrorFailure) {
			var errorMessage = document.getElementById('success');
			errorMessage.textContent = responseObject.mailError;
			errorMessage.textContent = responseObject.emptyErrorFailure;
		}

		if(responseObject.success) {
			var successMessage = document.getElementById('success');
			successMessage.textContent = responseObject.success;
		}

		if(responseObject.nameError) {
			var nameErrorMessage = document.getElementById('nameError');
			nameErrorMessage.textContent = responseObject.nameError;
		}
		if(responseObject.emailError) {
			var emailErrorMessage = document.getElementById('emailError');
			emailErrorMessage.textContent = responseObject.emailError;
		}
		if(responseObject.phoneError) {
			var phoneErrorMessage = document.getElementById('phoneError');
			phoneErrorMessage.textContent = responseObject.phoneError;
		}

		} catch (e) {
			console.error('Could not parse JSON!');
		}
	};

	var name = document.getElementById("name");
	var email = document.getElementById("email");
	var phone = document.getElementById("phone");
	var message = document.getElementById("message");




	const contactData = `name=${name.value}&email=${email.value}&phone=${phone.value}&message=${message.value}`;

	requestContact.open('post', 'contact/contact_process.php');
	requestContact.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	requestContact.send(contactData);
});
