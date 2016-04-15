<?php 

namespace myLibs;

class logger
{
	private $path = null;

	public function __construct($path = '')
	{
		$this->path = $path;
	}


	public function log($file = 'file.log', $title = '', $body = array(), $folder = 'logs')
	{
		$str = '';
		if (!empty($body))
		{
			foreach ($body as $key => $value)
			{
				$str .= " ".$key.": '".print_r($value, true)."'";
			}
		}
		file_put_contents($this->path.$folder.'/'.$file, date('Y-m-d H:i:s').": ".$title.$str."\n",LOCK_EX | FILE_APPEND);
	}

	
}