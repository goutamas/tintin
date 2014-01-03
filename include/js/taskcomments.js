function addComment(theTaskId)
{
	var theText = $("commenttext"+theTaskId);
	var fintext  = escape(theText.value);
//console.log(fintext);

	if(theText.value != "")
	{
		changePost("managecomments.php?action=add&tid="+theTaskId,"comments"+theTaskId,"theText="+fintext+"&theTask="+theTaskId);
	}

	blindtoggle("commentwrapper"+theTaskId);
return false;
}

function getComments(theTask)
{
	change("managecomments.php?action=showproject&tid="+theTask,"comments"+theTask);
}