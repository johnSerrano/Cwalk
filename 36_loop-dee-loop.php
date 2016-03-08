<?
$page_title = 'Loop-Dee-Loop';
$html_title = $page_title . ' | cwalk';
$instructions = 'Fill the blanks.';
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
    int n = 5;
    int j;
    while (n &#62; 0) {
        j = 0;
        while (j &#60; n) {
            printf("%d", j);
            j++;
        }
        n--;
    }
    printf("\n");
}

$ gcc main.c
$ ./a.out
<input type="text" id="input_0" class="input-large"/>
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
