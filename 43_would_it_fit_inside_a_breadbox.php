<?
$page_title = 'Would It Fit Inside a Breadbox?';
$html_title = $page_title . ' | cwalk';
$instructions = "What is the output?";
$html_description = "$page_title: $instructions";
require_once('header.php');
?>
<div class="instructions">
    <p><?= $instructions ?></p>
</div>
<div class="console">$ cat main.c
"#include &#60;stdio.h&#62;

int main(void)
{
    char *a;
    char b[4];
    printf("%lu\n%lu\n%lu\n%lu\n", sizeof(a), sizeof(*a), sizeof(b), sizeof(*b));
    return (0);
}
$ gcc main.c
$ ./a.out
<input type="text" id="input_0" class="input-medium"/>
<input type="text" id="input_1" class="input-medium"/>
<input type="text" id="input_2" class="input-medium"/>
<input type="text" id="input_3" class="input-medium"/>
</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
