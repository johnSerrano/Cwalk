<?
   $page_title = "A Basic Program";
   $html_title = "Cwalk | Home";
   $html_description = "C is fun! :)";
   require_once('header.php');
?>
<div id="instruction">
    <p>Set the value of n to be the integer 98.</p>
</div>
<div class="ide">
  int main(void)
  {
    int n;
    
    <input type="text" id="input_0" class="input-medium"/>
    
    return (0);
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