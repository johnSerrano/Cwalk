var g_answers = {
    "/0_basic_program.php": { "answers": [ { "a": "int", "type": "input"}, {"a": "main", "type": "input"} ] },
    "/1_successful_program.php": { "answers": [ { "a": "0", "type": "input" } ]},
    "/2_return_something.php":[],
    "/3_discover_integer.php":[],
    "/4_n_by_number.php":[],
    "/5_include_library.php":[],
    "/6_compile_the_file.php":[],
    "/7_list_all_the_files.php":[],
    "/8_get_out.php":[]
}
var g_congrats_url = "/congrats.php";

function find_next_page_url()
{
    var current_index;
    var found;

    current_index = location.pathname;
    found = false;
    for (var index in g_answers)
    {
	if (found == true)
	{
	    return (index);
	}
	if (index == current_index)
	{
	    found = true;
	}
    }
    return (g_congrats_url);
}

function correct() {
    var continuebutton = document.getElementById("continue");
    continuebutton.style.display = '';
    continuebutton.href = find_next_page_url();

    var checkbutton = document.getElementById("check");
    checkbutton.style.display = 'none';
    
    var a = document.getElementById("message");
    a.className = "alert alert-success";
    a.innerHTML="BOOM! Congrats!";
    a.style.display = 'block';

}

function wrong() {
    var a = document.getElementById("message");
    a.className = "alert alert-danger";
    a.innerHTML="0x90 - Please try again :)";
    a.style.display = '';
}

function get_inputs() {
    var inputs = [];
    var counter = 0;
    var loop = true;

    while (loop) {
	var input = document.getElementById("input_" + counter);
	if (input != null) {
	    inputs.push(input.value);
	} else {
	    return(inputs);
	}
	counter++;
    }
}

function check() {
    inputs = get_inputs();
    
    var a = document.getElementById("message");
    a.style.display = "none";
    if (g_answers.hasOwnProperty(location.pathname) == false) {
        console.log("ERROR: invalid question id: " + location.pathname);
        return;
    }
    var answers = g_answers[location.pathname]
    
    var cor = true;
    if (inputs.length != answers["answers"].length) {
	console.log("ERROR: Wrong number of inputs");
	wrong();
	return;
    }
    for (i = 0; i < inputs.length; i++)
    {
	if (answers["answers"][i]["type"] == "input")
	{
	    if (answers["answers"][i]["a"] != inputs[i].replace(/^\s+|\s+$/gm,''))
	    {
		cor = false;
	    }
	}
	else
	{
	    console.log("ERROR: Unknown question type: " + answers["answers"][i]["type"]);
	    wrong();
	    return;
	}
    }
    if (cor) {
	correct();
    } else {
	wrong();
    }
}
