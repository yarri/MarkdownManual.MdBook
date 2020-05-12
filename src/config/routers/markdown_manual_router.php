<?php
class MarkdownManualRouter extends Atk14Router {

	function setUp(){
		$this->addRoute("/markdown/","$this->default_lang/markdown_manual/index");
		$this->addRoute("/markdown/<id>/","$this->default_lang/markdown_manual/detail");
	}
}
