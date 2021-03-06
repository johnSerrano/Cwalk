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
int sub(int, int);

int main(void)
{
    int a;
    int b;
    int r;

    r = sub(2, 96);
    printf("%d\n", r);
    a = 7;
    b = 3;
    r = sub(a, 10);
    printf("%d\n", r);
    r = sub(a, b);
    printf("%d\n", r);
    printf("%d\n", sub(3, r));
    return (a);
}

int sub(int a, int b)
{
    int r;

    r = a - b;
    return (r);
}

$ gcc main.c
$ ./a.out
<input type="text" id="input_0" class="input-medium"/>
<input type="text" id="input_1" class="input-medium"/>
<input type="text" id="input_2" class="input-medium"/>
<input type="text" id="input_3" class="input-medium"/>
$ echo $?
<input type="text" id="input_4" class="input-medium"/>
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
