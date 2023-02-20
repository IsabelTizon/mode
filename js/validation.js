const validation = new JustValidate("#signUp");

validation
	//username
	.addField("#username", [
		{
			rule: "required",
		},
	])

	//emailk
	.addField("#email", [
		{
			rule: "required",
		},
		{
			rule: "email",
		},
		{
			validator: (value) => () => {
				return fetch("validate-email.php?email=" + encodeURIComponent(value))
					.then(function (response) {
						return response.json();
					})
					.then(function (json) {
						return json.available;
					});
			},
			errorMessage: "email already taken",
		},
	])

	//password
	.addField("#password", [
		{
			rule: "required",
		},
		{
			rule: "password",
		},
	])

	//confirmation password
	.addField("#password_confirmation", [
		{
			validator: (value, fields) => {
				return value === fields["#password"].elem.value;
			},
			errorMessage: "Passwords should match",
		},
	])

	//Checout
	.addField("#checkbox_age", [
		{
			rule: "required",
		},
	])

	//Button submit
	.onSuccess((event) => {
		document.getElementById("signUp").submit();
	});
