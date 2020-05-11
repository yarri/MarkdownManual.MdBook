Markdown Manual
===============

Installation
------------

    cd path/to/your/project/
    composer require 
    ln -s ../vendor/yarri/markdown-manual.mdbook/src/public/markdown_manual ./public/

    ln -s ../../vendor/atk14/md-book/src/app/controllers/md_book_base.php ./app/controllers/
    ln -s ../../vendor/atk14/md-book/src/app/views/md_book_base ./app/views/

To display the Markdown Manual in namespace markdown:

    mkdir app/controllers/markdown
    vim app/controllers/markdown/main_controller.php
    
    <?php
    // file: app/controllers/markdown/main_controller.php
    require_once(dirname(__FILE__)."/../md_book_base.php");

    class MainController extends MdBookBaseController{

      var $book_dir = ATK14_DOCUMENT_ROOT . "/public/markdown_manual/";

    }



[//]: # ( vim: set ts=2 et: )
