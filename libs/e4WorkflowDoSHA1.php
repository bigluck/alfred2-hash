<?php

class e4WorkflowDoSHA1 extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = sha1($inQuery);
		return array(array(
			'uid' => 'sha1',
			'arg' => $hash,
			'title' => 'SHA1: '.$hash,
			'icon' => 'icon.png',
			'valid' => 'true'));
	}
}

?>