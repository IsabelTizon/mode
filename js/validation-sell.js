const validation = new JustValidate("#formSell");

validation
	.addField("#file", [
		{
			rule: "minFilesCount",
			value: 1,
		},
		{
			rule: "maxFilesCount",
			value: 1,
		},
	])
	.addField("#title", [
		{
			rule: "required",
		},
	])
	.addField("#descript", [
		{
			rule: "required",
		},
	])
	.addField("#category", [
		{
			rule: "required",
		},
	])
	.addField("#brand", [
		{
			rule: "required",
		},
	])
	.addField("#condition1", [
		{
			rule: "required",
		},
	])
	.addField("#size", [
		{
			rule: "required",
		},
	])
	.addField("#price", [
		{
			rule: "required",
		},
	])
	.onSuccess((event) => {
		document.getElementById("formSell").submit();
	});
