<?php

class e4WorkflowDoSHA512 extends e4WorkflowCommands
{
	public function run($inQuery, $args)
	{
		$hash = file_exists($inQuery) ? hash_file('sha512', $inQuery) : hash('sha512', $inQuery);
		if ($args[1] == 'XML')
			return array(array(
				'uid' => 'sha512',
				'arg' => $hash,
				'title' => 'SHA512: '.$hash,
				'icon' => 'icon.png',
				'valid' => 'true'));
		return $hash;
	}
}

?>
