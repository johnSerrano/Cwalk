<?
   $page_title = "A Basic Program";
   $html_title = "Cwalk | Home";
   $html_description = "C is fun! :)";
   require_once('header.php');
?>
<div class="console">
  $ cat main.c
      int main (void) {
        int n;
        n=98;
        return(0);
      }
  $ <input type="text" id="input_0" class="input-medium"/> main.c
</div>
<div id="error"></div>
<div>
    <p>
        <a id="check" class="btn btn-lg btn-info" href="#" role="button" onclick="check();">Check Answer</a>
        <a id="continue" class="btn btn-lg btn-success" href="#" role="button" style="display:none;">Next Question</a>  
    </p>
</div>
<? require_once('footer.php'); ?>
