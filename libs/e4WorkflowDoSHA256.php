<?php

class e4WorkflowDoSHA256 extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = file_exists($inQuery) ? hash_file('sha256', $inQuery) : hash('sha256', $inQuery);
		if ($args[1] == 'XML')
			return array(array(
				'uid' => 'sha256',
				'arg' => $hash,
				'title' => 'SHA256: '.$hash,
				'icon' => 'icon.png',
				'valid' => 'true'));
		return $hash;
	}
}

?>
