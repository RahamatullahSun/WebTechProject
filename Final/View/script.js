function validateForm()
{
var x=document.forms["form"]["name"].value;
if (x==null || x=="")
  {
  alert(" Name must be filled out");
  return false;
  }
var x=document.forms["form"]["password"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }
}