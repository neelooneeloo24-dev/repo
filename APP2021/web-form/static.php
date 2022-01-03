<?php
$data = array(

'name'=>'Neeloo',
'class'=>'diploma',
'rollno'=>1001
);

echo <<<'FORM'
<h1>Student form</h1>
<hr/>
<form>
	<p>
	Name:<input type="text" value="{$data['name']}">
	</p>
	<p>
	Class:<input type="text" value="{$data['class']}">
	</p>
	<p>
	Rollno:<input type="text" value="{$data['rollno']}">
	</p>
</form>
FORM;