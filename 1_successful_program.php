<?
   $page_title = "A Basic Program";
   $html_title = "Cwalk | Home";
   $html_description = "C is fun! :)";
   require_once('header.php');
?>
<div class="ide">
<<<<<<< HEAD:basic_program.php
  <input type="text" id="input_0" class="input-medium"/> <input type="text" id="input_1" class="input-medium"/>(void)
  {
    return (98);
=======
  int main(void)
  {
    return (<input type="text" id="input_0" class="input-small"/>);
>>>>>>> 528365333d1cef0d9212b23570f2a1a54e5a448c:1_successful_program.php
  }
</div>
<div id="error"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
