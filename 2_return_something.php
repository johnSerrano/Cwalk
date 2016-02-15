<?
   $page_title = 'Show me the return value';
   $html_title = $page_title . ' | cwalk';
   $html_description = 'What would be the bash command to show the return value of any program you just ran?';
   require_once('header.php');
?>

<div class="instructions">
       <p>
       What would be the bash command to show the return value of any program you just ran?
       </p>
</div>

<div class="console">$ ./any_program
[program output]
$ echo <input type="text" id="input_0" class="input-medium"/>
</div>
<div id="message"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
