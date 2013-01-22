<?php

class e4WorkflowDoMD5 extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = md5($inQuery);
		return array(array(
			'uid' => 'md5',
			'arg' => $hash,
			'title' => 'MD5: '.$hash,
			'icon' => 'icon.png',
			'valid' => 'true'));
	}
}

?>