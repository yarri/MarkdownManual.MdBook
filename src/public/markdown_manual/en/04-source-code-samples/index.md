Source code samples
===================

Insert the sample source code between the three apostrophes:

    ```
    function helloWorld() {
      alert('Hello, World!');
    }
    ```
result: 

```
function helloWorld() {
  alert('Hello, World!');
}
```

Or indent the whole sample by 4 spaces from the left:


        function helloWorld() {
          alert('Hello, World!');
        }

the result is the same:

    function helloWorld() {
      alert('Hello, World!');
    }

### Syntax highlighting

After the opening triplet of apostrophes, you can write the programming language in which the sample is written.

Javascript sample with syntax highlighting:

    ```javascript
    function helloWorld() {
      alert('Hello, World!');
    }
    ```

```javascript
function helloWorld() {
  alert('Hello, World!');
}
```

PHP block with syntax highlighting:

    ```php
    $article = Article::FindById(1);
    echo $article->getTitle();
    var_dump($article->toArray());
    ```

```php
$article = Article::FindById(1);
echo $article->getTitle();
var_dump($article->toArray());
```

The library [GeSHi - Generic Syntax Highlighter](http://sourceforge.net/projects/geshi/) is used for syntax highlighting. GeSHi contains rules for highlighting a large number of languages. Worth mentioning:

- php
- javascript
- html
- sql
- xml
- python
- ruby

To see the full list of languages, go to the GeSHi source code: https://github.com/easybook/geshi/tree/master/geshi
