// JavaScript source code



function login()
{
    var mail = document.login.email.value;
    var pass = document.login.password.value;
    if (mail == '') {
        alert("Email must be entered !");
        return false;
    }

    if (pass == '') {
        alert("Password must be entered !");
        return false;
    }


}

function Newaccount()
{
    var fname = document.newform.fname.value;
    var lname = document.newform.lname.value;
    var mail = document.newform.email.value;
    var pass = document.newform.password.value;

    if (fname == '')
    {
        alert("Please enter first name ");
        return false;
    }

    if (lname == '') {
        alert("Please enter last name ");
        return false;
    }

    if (mail == '') {
        alert("Please enter your email ");
        return false;
    }

    if (pass == '') {
        alert("Please enter your password ");
        return false;
    }
}