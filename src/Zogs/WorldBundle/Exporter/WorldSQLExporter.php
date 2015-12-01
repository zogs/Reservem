<?php

namespace Zogs\WorldBundle\Exporter;

use Symfony\Component\HttpFoundation\Request;

class WorldSQLExporter 
{
	private $file_path;
	private $file_name;
	private $countries = array();

	public function __construct($exporter)
	{
		$this->exporter = $exporter;
	}

	public function setConfig($config)
	{
		$this->file_path =  $config['file_path'];
		$this->file_name = $config['file_name'];

		//remove trailling slash
		$this->file_path = rtrim($this->file_path,'/');		

		//check export directory
		if(! is_dir($this->file_path)) throw new \InvalidArgumentException(sprintf('Export directory %s does not exists', $this->file_path));
		if(! is_writable($this->file_path)) throw new \InvalidArgumentException(sprintf('Export directory %s is not writable', $this->file_path));
	}

	public function exportCountries($countries)
	{
	        foreach ($countries as $country) {
	            $this->countries[] = $country->getCode();
	        }

	        $this->exporter->setTables(array('world_country','world_states','world_cities'))
	        				->setWhere('CC1 IN ('.$this->getCountriesString().')')
	        				->setFilename($this->getFileName())
							->setOptions($this->getOptions())
							->export()
	        				;	            

	        return $this->getFileName().'.sql';
	}

	private function getFileName()
	{
		if( !empty($this->filename)) return $this->file_name.'_'.implode('_',$this->countries);
		else return implode('_',$this->countries);
	}

	private function getCountriesString()
	{
		$str = '';
		foreach ($this->countries as $country) {
			$str .= '"'.$country.'",';
		}
		return $str = rtrim($str,',');
		
	}

	public function setOptions(array $options)
	{
		$this->options = $options;

		return $this;
	}

	public function addOption($option)
	{
		$this->options[] = $option;

		return $this;
	}

	public function getOptions()
	{
		return $this->options;
	}
}