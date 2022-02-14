<?php
class MarkdownManualRouter extends Atk14Router {

	function setUp(){
		// the nicest routes are for the default language
		$this->addRoute("/markdown/","$this->default_lang/markdown_manual/index");
		$this->addRoute("/markdown/<id>/","$this->default_lang/markdown_manual/detail");

		// fallback routes for other languages
		$this->addRoute("/markdown-<lang>/","markdown_manual/index");
		$this->addRoute("/markdown-<lang>/<id>/","markdown_manual/detail");
	}
}
