<?
$page_title = 'While Loop';
$html_title = $page_title . ' | cwalk';
$instructions = 'Fill in the appropriate value so the program will output "0123".';
$html_description = "$page_title: $instructions";
require_once('header.php');
?>
<div class="instructions">
    <p><?= $instructions ?></p>
</div>
<div class="console">$ cat main.c
#include &#60;stdio.h&#62;

int main(void) {
    int n = 0;
    
    while (n &#60; <input type="text" id="input_0" class="input-small"/>) {
        printf("%d", n);
        n++;
    }
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
