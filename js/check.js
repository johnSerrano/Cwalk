answers = [["main"], [98, "void"], ["int"]]

function check(inputs, questionid) {

	var answer = answers[questionid]
	for (var input in inputs) {
		console.log(input);
	}
	console.log(" ");
	for each (var ans in answer) {
		console.log(ans);
	}
}

check(["main", "void"], 0);
