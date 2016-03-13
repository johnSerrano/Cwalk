var g_answers = {
    // main
    "/0_basic_program.php": { "answers": [ { "a": "int", "type": "input"}, {"a": "main", "type": "input"} ] },
    "/1_successful_program.php": { "answers": [ { "a": "0", "type": "input" } ]},
    "/2_return_something.php": { "answers": [ { "a": "$?", "type": "input" } ] },

    // integers and chars
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
    "/15_int_and_char.php": { "answers": [ { "a": /^J$/, "type": "regex" } ] },

    // functions basics
    "/16_call_a_function.php": { "answers": [ { "a": /^(\s*;*)*f\s*\(\s*\)\s*(;\s*)+$/, "type": "regex" } ] },
    "/17_holberton_function.php": { "answers": [ {"a": "Holberton", "type": "input"} ] },
    "/18_f_printf.php": { "answers": [ { "a": /^Folberton$/, "type": "regex" } ] },
//    "/19_return_values.php": { "answers": [ { "a": "98", "type": "input" } ] },
    "/20_return_n.php": { "answers": [ { "a": /^402$/, "type": "regex" } ] },
    "/21_return_a_returned_value.php": { "answers": [ { "a": "98", "type": "input" } ] },
    "/22_more_f_calls.php": { "answers": [ { "a": /^402$/, "type": "regex" }, { "a": /^98$/, "type": "regex" }, { "a": /^0$/, "type": "regex" } ] },
    "/23_even_more_f_calls.php": { "answers": [ { "a": /^98$/, "type": "regex" }, { "a": /^17$/, "type": "regex" }, { "a": /^10$/, "type": "regex" }, { "a": /^13$/, "type": "regex" }, { "a": /^7$/, "type": "regex" } ] },
    "/24_sub.php": { "answers": [ { "a": /^-94$/, "type": "regex" }, { "a": /^-3$/, "type": "regex" }, { "a": /^4$/, "type": "regex" }, { "a": /^-1$/, "type": "regex" }, { "a": /^7$/, "type": "regex" } ] },
    "/25_scope.php": { "answers": [ { "a": /^13$/, "type": "regex" }, { "a": /^37$/, "type": "regex" }, { "a": /^3$/, "type": "regex" }, { "a": /^37$/, "type": "regex" }, { "a": /^101$/, "type": "regex" }, { "a": /^0$/, "type": "regex" }, { "a": /^3$/, "type": "regex" }, { "a": /^37$/, "type": "regex" }, { "a": /^0$/, "type": "regex" } ] },
    "/26_if_statements.php": { "answers": [ {"a": "B", "type": "input"} ] },
    "/27_conditional_operators.php": { "answers": [ {"a": "B", "type": "input"}, {"a": "C", "type": "input"} ] },
    "/28_else.php": { "answers": [ {"a": "B", "type": "input"} ] },
    "/29_else_if.php": { "answers": [ {"a": "5", "type": "input"} ] },
    "/30_all_together_now.php": { "answers": [ {"a": "C", "type": "input"} ] },
    "/31_variables_again.php": { "answers": [ {"a": "1", "type": "input"} ] },
    "/32_while_loop.php": { "answers": [ {"a": /\s*4\s*/, "type": "regex"} ] },
    "/33_another_while_loop.php": { "answers": [ {"a": "31", "type": "input"} ] },
    "/34_while_no_time_passes.php": { "answers": [ {"a": "7", "type": "input"} ] },
    "/35_do_it_anyways.php": { "answers": [ {"a": "8", "type": "input"} ] },
    "/36_loop-dee-loop.php": { "answers": [ {"a": "012340123012010", "type": "input"} ] },
    "/37_for_four_fore.php": { "answers": [ {"a": "012340123012010", "type": "input"} ] },
    "/38_i_could_go_for_another_loop.php": { "answers": [ {"a": /\s*4\s*/, "type": "regex"}, {"a": /\s*8\s*/, "type": "regex"} ] },
    "/39_alphabet.php": { "answers": [ {"a": "abcdefghijklmnopqrstuvwxyz", "type": "input"} ] },
    "/40_pointer_here_we_are.php": { "answers": [ {"a": "char *", "type": "input"} ] },
    "/42_print_this_pointer.php": { "answers": [ {"a": "%c", "type": "input"}, {"a": "*n", "type": "input"} ] },
    "/44_nobody_at_this_address.php": { "answers": [ {"a": "&c;", "type": "input"} ] },
    "/46_swapchat.php": { "answers": [ {"a": "a, a", "type": "input"} ] },
    "/48_arrays_my_love.php": { "answers": [ {"a": "a[2]", "type": "input"} ] },
    "/50_nightmare.php": { "answers": [ {"a": "8, 4, 12, 4", "type": "input"} ] },

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
