<?
$page_title = 'Print the pointer.';
$html_title = $page_title . ' | cwalk';
$instructions = "Print the character c using the pointer n.";
$html_description = "$page_title: $instructions";
require_once('header.php');
?>
<div class="instructions">
    <p><?= $instructions ?></p>
</div>
<div class="console">$ cat main.c
#include &#60;stdio.h&#62;

int main(void)
{
    char c = 'c';
    char *n;
    n = &c;
    printf("%c\n", <input type="text" id="input_0" class="input-medium"/>);
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
