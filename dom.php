<?php
$content = <<<HTML
<form action='http://google.com' method='post'>
<label>Name</label>
<input type='text' id='name' name='name'>
<input type='text' id='email' name='email' />
<input type='hidden' id='hidden1' name='hidden1' value='hiddenvalue1'/>
<input type='hidden' id='hidden2' name='hidden2' value='hiddenvalue2'/>
<input type='hidden' id='hidden3' name='hidden3' value='hiddenvalue3'/>
</form>
HTML;

$document   = new DOMDocument();
$document->loadHTML($content);

for($i=0; $i<$document->getElementsByTagName('input')->length; $i++)
{
	# Input
	$input 			= $document->getElementsByTagName('input')->item($i);
	$name[]['input']= $input->attributes->getNamedItem('name')->value;
}

# Form Attr
$form				= $document->getElementsByTagName('form')->item(0);
$action['action']	= $form->attributes->getNamedItem('action')->value;
$method['method']	= $form->attributes->getNamedItem('method')->value;

$arr 	= array_merge($name, $action, $method);
var_dump($arr);
?>
