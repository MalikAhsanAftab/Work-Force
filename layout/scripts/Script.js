function Validate()
{
	var Msg=document.getElementById("MessageId");
	if(Msg.value.trim().length > 0 )
		return true;
	alert("Please enter the message");
	return false;
}