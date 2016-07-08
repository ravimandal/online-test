function formValidation()  
{

var uid = document.registration.userid; //user id 
var passid = document.registration.passid; //password 
var uname = document.registration.username;  //first and last name
var ucountry = document.registration.ucountry; //country 
var uemail = document.registration.uemail;  //email

if(userid_validation(uid,5,20))  
	{  

	if(passid_validation(passid,5,20))  
	{  
		if(allLetter(uname))  
		{   
			if(countryselect(ucountry))  
			{ 
				if(ValidateEmail(uemail))  
				{  
	 				return true;
				}   
			}    
		}  
	}  
	}  
	return false;    
} ;
//user id
function userid_validation(uid,mx,my)  
{  
	var uid_len = uid.value.length;  
	if (uid_len == 0 || uid_len >= my || uid_len < mx)  
	{  
		alert("User Id should not be empty / length be between "+mx+" to "+my);  
		uid.focus();  
		return false;  
	}  
	return true;  
} 

//user pass 
function passid_validation(passid,mx,my)  
{  
	var passid_len = passid.value.length;  
	if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
	{  
		alert("Password should not be empty / length be between "+mx+" to "+my);  
		passid.focus();  
		return false;  
	}  
	return true;  
} 

//user name 
function allLetter(uname)  
{   
	var letters = /^[A-Za-z]+$/;  
	if(uname.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Username must have alphabet characters only');  
		uname.focus();  
		return false;  
	}  
}  
 //user address


function countryselect(ucountry)  
{  
if(ucountry.value == "Default")  
{  
alert('Select your Gender from the list');  
ucountry.focus();  
return false;  
}  
else  
{  
return true;  
}  
}  
//user email validation
function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}  


}



