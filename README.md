Markdown Manual
===============

Installation
------------

    cd path/to/your/project/
    composer require yarri/markdown-manual.mdbook
    ln -s ../../vendor/yarri/markdown-manual.mdbook/src/app/controllers/markdown_manual_controller.php ./app/controllers/
    ln -s ../../vendor/yarri/markdown-manual.mdbook/src/config/routers/markdown_manual_router.php ./config/routers/
    ln -s ../vendor/yarri/markdown-manual.mdbook/src/public/markdown_manual ./public/

Also, create symlinks for files in the package atk14/md-book

    ln -s ../../vendor/atk14/md-book/src/app/controllers/md_book_base.php ./app/controllers/
    ln -s ../../vendor/atk14/md-book/src/app/views/md_book_base ./app/views/
    ln -s ../../../vendor/atk14/md-book/src/app/views/shared/md_book ./app/views/shared

Edit config/routers/load.php and add the instruction for load the MarkdownManualRouter:

    Atk14Url::AddRouter("MarkdownManualRouter");

[//]: # ( vim: set ts=2 et: )
