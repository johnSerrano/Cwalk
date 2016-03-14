<?
$page_title = 'References Required for Consideration';
$html_title = $page_title . ' | cwalk';
$instructions = 'Change the value of c to \'z\'';
$html_description = "$page_title: $instructions";
require_once('header.php');
?>
<div class="instructions">
    <p><?= $instructions ?></p>
</div>
<div class="console">$ cat main.c
#include &#60;stdio.h&#62;

void change(<input type="text" id="input_0" class="input-large"/>p) {
	<input type="text" id="input_1" class="input-medium"/> = 'z';
}

int main(void) {
    char c;
    
    c = 'A';
    change(<input type="text" id="input_2" class="input-medium"/>);
    return (0);
}

</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
