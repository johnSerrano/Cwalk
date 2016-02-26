<?
$page_title = 'Digits to letters';
$html_title = $page_title . ' | cwalk';
$instructions = 'What does this program print?';
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
    int n;
    char c;

    n = 8;
    c = 8 + '0';
    printf("%c\n", c);
    return (0);
}
$ gcc main.c
$ ./a.out
<input type="text" id="input_0" class="input-small"/>
$
</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>