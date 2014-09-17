<?php
$name = 'Sanjay Singh';

$content  = <<<TXT
This is my dummy content for <strong><em>$name</em></strong>
<h1>This is Heading 1</h1>
<style>
	h1{
		color:red;
		background-color: yellow;	
	}
</style>

TXT;

file_put_contents('file_put_content.html',$content);
