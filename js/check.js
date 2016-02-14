answers = {
	"1": ["main"], 
	"2": [98, "void"], 
	"3": ["int"],
	"/0_basic_program.php": ["int", "main"],
	"/1_successful_program.php": [],
	"/2_return_something.php":[],
	"/3_discover_integer.php":[],
	"/4_n_by_number.php":[],
	"/5_include_library.php":[],
	"/6_compile_the_file.php":[],
	"/7_list_all_the_files.php":[],
	"/8_get_out.php":[]
}
_
function correct() {
	var continuebutton = document.getElementById("continue");
	continuebutton.style.display = 'block';
	var checkbutton = document.getElementById("check");
	checkbutton.style.display = 'none';
}

function wrong() {
	var a = document.getElementById("error");
	a.innerHTML="<p>WRONG</p>";
	a.style.display = 'block';
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

	var a = document.getElementById("error");
	a.style.display = "none";
        if (answers.hasOwnProperty(location.pathname) == false) {
                console.log("ERROR: invalid question id: " + location.pathname);
                return;
        }
        var answer = answers[location.pathname]

	var cor = true;
	if (inputs.length != answer.length) {
		console.log("ERROR: Wrong number of inputs");
		wrong();
		return;
	}	
	for (i = 0; i < inputs.length; i++) {
		if (answer[i] != inputs[i]) {
			cor = false;
		}
	}
	if (cor) {
		correct();
	} else {
		wrong();
	}
}
