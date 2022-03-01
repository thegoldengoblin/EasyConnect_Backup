function validationOfMail(userMail)
{
		//Validating e mail with a condition of:must be min of 4 digit and max is 20 and there must be @ between and after that 2 min letter and 5 max '.'oaparator and after min is 2 and max is 4
	  return /^([a-zA-Z0-9\.-]{4,20})@([a-zA-Z0-9\-]{2,20}).([a-z]{2,5})$/.test(userMail);
}

function validationOfPassword(userPassword)
{
		//Password matches only when it has atleast one uppercase one special char and one number
   	return /^(?=.*[0-9])(?=.*[!@%^&*])[a-zA-Z0-9!@%^&*]{7,15}$/.test(userPassword);
}
	
function validationOfContact(userContactNumber)
{	
		//Validates indian telephone number and indian moblie number
	return /^([0-9]{5}[-\s][0-9]{6}||[6789]\d{9})$/.test(userContactNumber);

}

function validationOfName(userName)
{
		//Validates any name having minimum of 2 and maximum of 20 char length
	return /^[A-Za-z\s]{2,20}$/.test(userName);
}

function validationOfCity(userCity)
{
		//Validates any name with space and '.' with maximum length of 30
	return /^[a-zA-Z\s.]{3,30}$/.test(userCity);

}

function validationOfPincode(userPincode)
{
		//Validates inidan pincode wich has 6 digits.
	return /^[0-9]{6,6}$/.test(userPincode);

}