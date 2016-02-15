<?
   $page_title = "A Successful Program";
   $html_title = "Cwalk | A Successful Program";
   $html_description = "C is fun! :)";
   require_once('header.php');
?>

<div class="instructions">
       <p>
       What should be the returned value of the main function on success?
       </p>
</div>

<div class="ide">int main(void) {
  return (<input type="text" id="input_0" class="input-small"/>);
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
