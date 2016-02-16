<?
$page_title = 'More functions calls';
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
void f(int);

int main(void)
{
    int n;

    n = 98;
    f(402);
    printf("\n");
    f(n);
    printf("\n");
    return (0);
}

void f(int n)
{
    printf("%d", n);
}

$ gcc main.c
$ ./a.out
<input type="text" id="input_0" class="input-medium"/>
<input type="text" id="input_1" class="input-medium"/>
$ echo $?
<input type="text" id="input_2" class="input-medium"/>
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
