function new_acc() 
{
	if (Document.new_account.fname.value ==" ") 
	{
		alert("Please Enter your First Name");
		return false;
	}
	if (Document.new_account.lname.value ==" ") 
	{
		alert("Please Enter your Last Name");
		return false;
	}
	if (Document.new_account.eop.value ==" ") 
	{
		alert("Please Enter your Phone Number or your Email");
		return false;
	}
	if (Document.new_account.pass.value ==" ") 
	{
		alert("Please Enter Password for your account");
		return false;
	}
	if (Document.new_account.day.value == "Day") 
	{
		alert("Please choose the Date");
		return false;
	}
	if (Document.new_account.mon.value =="Month") 
	{
		alert("Please choose the Month");
		return false;
	}
	if (Document.new_account.year.value =="Year") 
	{
		alert("Please choose the year");
		return false;
	}
}


function check()
{
	if(Document.login.eop.value=" ")
	{
		alert("Enter Email or Phone Number");
		return false;
	}
	if(Document.login.pass.value=" ")
	{
		alert("Enter your Password Please");
		return false;
	}
}