// handle the ENTER on all input boxes

function install_enter_on_inputs()
{
    var counter;
    var input;
    
    counter = 0;
    do
    {
	input = document.getElementById("input_" + counter);
	if (input != null)
	{
	    input.addEventListener("keypress", function(e) { if (event.keyCode == 13) {document.getElementById("check").click()} }, false);
	}
	counter++;
    }
    while (input != null);
}
