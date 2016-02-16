var g_answers = {
    "/0_basic_program.php": { "answers": [ { "a": "int", "type": "input"}, {"a": "main", "type": "input"} ] },
    "/1_successful_program.php": { "answers": [ { "a": "0", "type": "input" } ]},
    "/2_return_something.php": { "answers": [ { "a": "$?", "type": "input" } ] },
    "/3_discover_integer.php": { "answers": [ { "a": "int", "type": "input" } ] },
    "/4_n_by_number.php": { "answers": [ { "a": /^(\s*;*)*n\s*=\s*98\s*(;\s*)+$/, "type": "regex" } ] },
    "/5_include_library.php": { "answers": [ { "a": "<stdio.h>", "type": "input" } ] },
    "/6_compile_the_file.php": { "answers": [ { "a": "gcc", "type": "input" } ] },
    "/7_list_all_the_files.php": { "answers": [ { "a": "a.out", "type": "input" } ] },
    "/8_get_out.php": { "answers": [ { "a": /^98$/, "type": "regex" } ] },
    "/9_lot_of_blanks.php": { "answers": [ { "a": "main", "type": "input" }, { "a": "{", "type": "input" }, { "a": "char", "type": "input" }, { "a": "return", "type": "input" } ] },
    "/10_what_the_H.php": { "answers": [ { "a": "int", "type": "input" }, { "a": "main", "type": "input" }, { "a": "{", "type": "input" }, { "a": "'H'", "type": "input" }, { "a": "return", "type": "input" }, { "a": "0", "type": "input" }, { "a": "}", "type": "input" } ] },
    "/11_print_char.php": { "answers": [ { "a": "include", "type": "input" }, { "a": ";", "type": "input" }, { "a": ";", "type": "input" }, { "a": /^%c$/, "type": "regex" }, { "a": ";", "type": "input" }, { "a": ";", "type": "input" } ] },
    "/12_exectue_what.php": { "answers": [ { "a": /^H$/, "type": "regex" } ] },
    "/13_adding_letters.php": { "answers": [ { "a": /^I$/, "type": "regex" } ] },
    "/14_printing_digits.php": { "answers": [ { "a": /^8$/, "type": "regex" } ] },
    "/14_printing_digits.php": { "answers": [ { "a": /^8$/, "type": "regex" } ] },
    "/15_int_and_char.php": { "answers": [ { "a": /^J$/, "type": "regex" } ] },
    "18_f_printf.php": { "answers": [ { "a": /^Folberton$/, "type": "regex" } ] },

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
		break;
	    }
	}
	else if (answers["answers"][i]["type"] == "regex")
	{
	    var match;
	    
	    match = answers["answers"][i]["a"].test(inputs[i]);
	    if (match == false)
	    {
		cor = false;
		break;
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
