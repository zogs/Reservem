<?php

namespace Zogs\WorldBundle\Importer;

use Symfony\Component\HttpFoundation\Request;

class SQLImporter
{
	private $files_path;
	private $mysql_path;
	private $dbname;
	private $dbuser;
	private $dbpass;
	private $options = '';

	public function __construct($dbname,$dbuser,$dbpass)
	{
		$this->dbname = $dbname;
		$this->dbuser = $dbuser;
		$this->dbpass = $dbpass;
	}

	public function setConfig($config)
	{
		$this->files_path = $config['files_to_import'];
	}

	public function setDatabase($dbname)
	{
		$this->dbname = $dbname;
	}

	public function setOptions(array $options)
	{
		$this->options = $options;
	}

	public function addOption($option)
	{
		$this->options[] = $option;
	}

	public function getOptions()
	{
		if(empty($this->options)) return '';
		$str = '';
		foreach ($this->options as $option) {
			$str .= '--'.$option.' ';
		}
		return $str;
	}

	public function setMysqlPath($mysql_path)
	{
		$this->mysql_path = $mysql_path;
	}

	public function importAll($files_path)
	{
		$files_path = rtrim($files_path,DIRECTORY_SEPARATOR);
		if(!is_dir($files_path)) return sprintf('Folder %s does not exists', $files_path);

		$files = array_diff(scandir($files_path), array('..', '.'));

		$res = array();
		foreach($files as $file) {
			echo 'import => '.$file;
			$res[] = $this->import($files_path.DIRECTORY_SEPARATOR.$file);
		}
		
		return implode('\n',$res);
	}

	public function import($file_path)
	{

		if(!file_exists($file_path)) return sprintf('File %s does not exists', $file_path);

		$cmd = $this->mysql_path.'mysql -u'.$this->dbuser. ' -p'.$this->dbpass.' '.$this->dbname.' '.$this->getOptions().' < '.$file_path;
		//dump($cmd);
		//exit();
		exec($cmd);

		return $file_path.' imported';
		
	}

	
}