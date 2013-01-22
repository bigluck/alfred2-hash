<?php

class e4WorkflowDoBase64Decode extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = base64_decode($inQuery);
		return array(array(
			'uid' => 'base64_decode',
			'arg' => $hash,
			'title' => 'base64_decode: '.$hash,
			'icon' => 'icon.png',
			'valid' => 'true'));
	}
}

?>