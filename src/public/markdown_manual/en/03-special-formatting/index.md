Special formatting
==================

This chapter discusses formatting in Markdown that is not used that often.

* [Links opened in a new window](#links-opened-to-a-new-window)
* [Quotes](#quotes)
* [Centering text](#centering-text)
* [Embedded HTML](#embedded-html)
* [Horizontal separator](#horizontal-separator)

### Links opened to a new window {#links-opened-to-a-new-window}


    Links with class blank will be opened in a new window.

    [Link to new window](http://www.atk14.net/){.blank}

Links with class blank will be opened in a new window.

[Link to new window](http://www.atk14.net/){.blank}


___________________________________________________________________________________________________________________________________________
### Quotes {#quotes}

    William Shakespeare:
    
    > For there was never yet philosopher
    > That could endure the toothache patiently.

William Shakespeare:

> For there was never yet philosopher
> That could endure the toothache patiently.


___________________________________________________________________________________________________________________________________________
### Centering text {#centering-text}

    #### <center>Centered heading h4</center>

#### <center>Centered heading h4</center>

<br>
<br>

    <center>
    
    Centered paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Curabitur et vestibulum odio, sit amet malesuada leo. Phasellus non vulputate mi.
    Nulla facilisi. Quisque magna nibh, tristique et ultrices eu, porttitor in
    turpis. Praesent sapien sem, fringilla sed consequat a, congue eu quam. Proin
    ultricies purus id erat fringilla blandit vitae ut elit. Interdum et malesuada
    fames ac ante ipsum primis in faucibus. Donec blandit quam felis, ac sollicitudin
    nunc ornare vitae.
    
    </center>

<center>

Centered paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Curabitur et vestibulum odio, sit amet malesuada leo. Phasellus non vulputate mi.
Nulla facilisi. Quisque magna nibh, tristique et ultrices eu, porttitor in
turpis. Praesent sapien sem, fringilla sed consequat a, congue eu quam. Proin
ultricies purus id erat fringilla blandit vitae ut elit. Interdum et malesuada
fames ac ante ipsum primis in faucibus. Donec blandit quam felis, ac sollicitudin    
nunc ornare vitae.

</center>


___________________________________________________________________________________________________________________________________________
### Embedded HTML {#embedded-html}

HTML formatting can be used in a Markdown document and in most cases it works very well.

    <dl>
      <dt>Definition list</dt>
      <dd>Is something people use sometimes.</dd>

      <dt>Markdown in HTML</dt>
      <dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
    </dl>

<dl>
  <dt>Definition list</dt>
  <dd>Is something people use sometimes.</dd>

  <dt>Markdown in HTML</dt>
  <dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
</dl>

___________________________________________________________________________________________________________________________________________
### Horizontal separator {#horizontal-separator}

```
Three or more dashes,

---

... asterisks or

***

... underscores

___

```

Three or more dashes,

---

... stars or

***

... underscores

___
