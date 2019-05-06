<?php

class AboutController{

	public function __construct(){}

	public function show(){
		
		$templateVariable['version'] 	= \Library\Helpers::versionApp();
		$templateVariable['base_url'] 	= \Library\Helpers::baseUrl();

		$this->htmlRender = new \RocketStartup\FrontView\Template();
		$this->htmlRender->content($templateVariable)
			->nameApplication('main')
			->nameTemplate('default')
			->fileTemplate('about.tpl')
			->useCache(false)
			->render();
	}

}