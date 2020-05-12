<?php
require_once(ATK14_DOCUMENT_ROOT."/app/controllers/md_book_base.php");

class MarkdownManualController extends MdBookBaseController{

	function _before_filter(){
		$this->book_dir = ATK14_DOCUMENT_ROOT . "/public/markdown_manual/";

		if(!$this->logged_user || !$this->logged_user->isAdmin()){
			$this->_execute_action("error403");
		}
	}
}
