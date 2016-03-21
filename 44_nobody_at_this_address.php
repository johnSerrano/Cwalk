<?
$page_title = 'Nobody at this address.';
$html_title = $page_title . ' | cwalk';
$instructions = 'Print the address of the character c.';
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
    char c;
    char *p;
    p = <input type="text" id="input_0" class="input-large"/> 
    printf("%p",p);
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
