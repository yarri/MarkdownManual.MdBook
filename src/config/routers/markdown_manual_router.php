<?php
class MarkdownManualRouter extends Atk14Router {

	function setUp(){
		global $ATK14_GLOBAL;

		$supported_langs = $ATK14_GLOBAL->getSupportedLangs();
		$default_lang = $ATK14_GLOBAL->getDefaultLang();

		// override $default_lang
		foreach(array("cs","en") as $l){
			if(in_array($l,$supported_langs)){
				$default_lang = $l;
				break;
			}
		}

		// the nicest routes are for the default language
		$this->addRoute("/markdown/","$default_lang/markdown_manual/index");
		$this->addRoute("/markdown/<id>/","$default_lang/markdown_manual/detail",array("id" => '/[^\/]{3,}/')); // we want to <id> not to be mistaken by <lang>

		// fallback routes for other languages
		$this->addRoute("/markdown/<lang>/","markdown_manual/index");
		$this->addRoute("/markdown/<lang>/<id>/","markdown_manual/detail",array("id" => '/[^\/]{3,}/'));
	}
}
