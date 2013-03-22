<?php
$content = <<<HTML
<form action='http://google.com' method='post'>
<label>Name</label>
<input type='text' id='name' name='name'>
<input type='text' id='email' name='email' />
<input type='hidden' id='hidden1' name='hidden1' value='hiddenvalue1'/>
<input type='hidden' id='hidden2' name='hidden2' value='hiddenvalue2'/>
</form>
HTML;

$document   = new DOMDocument();
$document->loadHTML($content);
$input 		= $document->getElementsByTagName('input')->item(0);
$form		= $document->getElementsByTagName('form')->item(0);
echo $form->attributes->getNamedItem("action")->value;
echo '<br/>';
echo $form->attributes->getNamedItem("method")->value;
echo '<br/>';
echo $input->attributes->getNamedItem("name")->value;
echo $document->getElementsByTagName('input')->length;
?>
