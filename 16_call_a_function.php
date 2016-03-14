<?

$page_title = 'Call a Function';
$html_title = $page_title . ' | cwalk';
$instructions = 'Call the function f.';
$html_description = "$page_title: $instructions";
require_once('header.php');

?>

<div class="instructions">
    <p>
    <?= $instructions ?>
    </p>
</div>

<div class="ide">void f(void);

int main(void) {
  <input type="text" id="input_0" class="input-medium"/>
  return (0);
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
