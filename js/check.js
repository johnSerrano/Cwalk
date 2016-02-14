answers = {
	"1": ["main"], 
	"2": [98, "void"], 
	"3": ["int"],
	"/basic_program.php": ["int", "main"]
}

function correct() {
	var continuebutton = document.getElementById("continue");
	continuebutton.style.display = 'block';
	var checkbutton = document.getElementById("check");
	checkbutton.style.display = 'none';
}

function wrong() {
	document.getElementById("error").innerHTML="<p>WRONG</p>";
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
