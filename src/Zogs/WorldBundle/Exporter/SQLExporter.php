<?php

namespace Zogs\WorldBundle\Exporter;

use Symfony\Component\HttpFoundation\Request;

class SQLExporter 
{
	private $file_path;
	private $file_name;
	private $file_ext = 'sql';
	private $mysql_path;
	private $request;
	private $dbname;
	private $dbuser;
	private $dbpassword;
	private $countries = array();

	public function __construct(Request $request,$dbname,$dbuser,$dbpassword)
	{
		$this->request = $request;
		$this->dbname = $dbname;
		$this->dbuser = $dbuser;
		$this->dbpassword = $dbpassword;
	}

	public function setConfig($config)
	{
		$this->file_path =  $config['file_path'];
		$this->file_name = $config['file_name'];

	}

	public function setMysqlPath($mysql_path)
	{
		$this->mysql_path = $mysql_path;
	}

	public function exportCountries($countries)
	{
	            foreach ($countries as $country) {
	                $this->countries[] = $country->getCode();
	            }

	            //prepare password option
	            $password = ($this->dbpassword !== null)? ' -p'.$this->dbpassword.' ' : '';

	            //dump countries
	            $command = $this->mysql_path.'mysqldump -u'.$this->dbuser.' '.$password.' --databases '.$this->dbname.' '.$this->getOptions().' --tables world_country --where="CC1 IN ('.$this->getCountriesString().')" > '.$this->getFilePath().' ';
	            exec($command);

	            //dump states
	            $command = $this->mysql_path.'mysqldump -u'.$this->dbuser.' '.$password.' --databases '.$this->dbname.' '.$this->getOptions().' --tables world_states --where="CC1 IN ('.$this->getCountriesString().')"  >>  '.$this->getFilePath().' ';             
	            exec($command);

	            //dump cities
	            $command = $this->mysql_path.'mysqldump -u'.$this->dbuser.' '.$password.' --databases '.$this->dbname.' '.$this->getOptions().' --tables world_cities --where="CC1 IN ('.$this->getCountriesString().')"  >>  '.$this->getFilePath().' ';              
	            exec($command);

	            return $this->getFileUrl();
	}

	private function getFilePath()
	{
		return  $this->file_path.DIRECTORY_SEPARATOR.$this->getFileName();
	}

	private function getFileUrl()
	{
		return $this->request->getScheme() . '://' . $this->request->getHttpHost() . $this->request->getBasePath().'/'.$this->getFileName();
	}

	private function getFileName()
	{
		return $this->file_name.'_'.implode('_',$this->countries).'.'.$this->file_ext;
	}

	private function getCountriesString()
	{
		$str = '';
		foreach ($this->countries as $country) {
			$str .= '\"'.$country.'\",';
		}
		return $str = rtrim($str,',');
		
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
}