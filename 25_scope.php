<?
$page_title = 'Scope of variables';
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
void f(int, int);

int main(void)
{
    int a;
    int b;

    a = 13;
    b = 37;
    printf("%d\n%d\n", a, b);
    a -= 10;
    f(a, b);
    printf("%d\n%d\n", a, b);
    return (0);
}

void f(int a, int b)
{
    printf("%d\n%d\n", a, b);
    b = 0;
    a += 98;
    printf("%d\n%d\n", a, b);
}

$ gcc main.c
$ ./a.out
<input type="text" id="input_0" class="input-medium"/>
<input type="text" id="input_1" class="input-medium"/>
<input type="text" id="input_2" class="input-medium"/>
<input type="text" id="input_3" class="input-medium"/>
<input type="text" id="input_4" class="input-medium"/>
<input type="text" id="input_5" class="input-medium"/>
<input type="text" id="input_6" class="input-medium"/>
<input type="text" id="input_7" class="input-medium"/>
$ echo $?
<input type="text" id="input_8" class="input-medium"/>
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
