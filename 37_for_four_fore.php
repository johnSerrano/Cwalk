<?
$page_title = 'For Four Fore';
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
    int n;
    int j;
    for ( n = 5; n &#62; 0; n--) {
        for ( j = 0; j &#60; n; j++) {
            printf("%d", j);
        }
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
