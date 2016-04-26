function validname()
{
	e=event.keycode;
	if(((e>=65) && (e<=90) || (e>=97) && (e<=122)) || (e==32))
	{
	}
	else
	{
		event.keyCode=0;
	}
}
function validemail()
	{
		e=event.keyCode;
		if(((e>=65) && (e<=90) || (e>=97) && (e<=122)) || (e==32) || (e==46) || ((e>=48) && (e<=57)) || (e==64))
		{
		}
		else
		{
			event.keyCode=0;
		}
	}
	function validcompany()
	{
		e=event.keyCode;
		if(((e>=65) && (e<=90) || (e>=97) && (e<=122)) || (e==32) || (e==46))
		{
		}
		else
		{
			event.keyCode=0;
		}
	}
	function validnumber()
	{
		e=event.keyCode;
		if(((e>=48) && (e<=57)) || (e==46))
		{
		}
		else
		{
			event.keyCode=0;
		}
	}

