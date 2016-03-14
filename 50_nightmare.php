<?
$page_title = 'Nightmare';
$html_title = $page_title . ' | cwalk';
$instructions = 'What does it print?';
$html_description = "$page_title: $instructions";
require_once('header.php');
?>
<div class="instructions">
    <p><?= $instructions ?></p>
</div>

<div class="console">$ cat main.c
#include &#60;stdio.h&#62;

void print(int *a)
{
    printf("%lu, %lu, ", sizeof(a), sizeof(*a));
}

int main(void)
{
    int a[3];

    print(a);
    printf("%lu, %lu\n", sizeof(a), sizeof(*a));
    return (0);
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
