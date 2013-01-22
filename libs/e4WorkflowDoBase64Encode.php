<?php

class e4WorkflowDoBase64Encode extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = base64_encode($inQuery);
		return array(array(
			'uid' => 'base64_encode',
			'arg' => $hash,
			'title' => 'base64_encode: '.$hash,
			'icon' => 'icon.png',
			'valid' => 'true'));
	}
}

?>