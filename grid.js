
$(document).ready(function() {

	$("input.flat").keypress( function (e) {
		
		switch(e.keyCode)
		{
			case 37:
				$(this).parent()
					.prev()
					.children("input.flat")
					.focus();
				break;
			
			case 39:
				$(this).parent()
					.next()
					.children("input.flat")
					.focus();
				break;

			case 40:
				$(this).parent()
					.parent()
					.next()
					.children("td")
					.children("input.flat[name="+$(this).attr("name")+"]")
					.focus();
				break;

			case 38:
				$(this).parent()
					.parent()
					.prev()
					.children("td")
					.children("input.flat[name="+$(this).attr("name")+"]")
					.focus();
				break;

			case 46:
				$(this).val("");
		}
	});
});


