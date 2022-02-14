Basic Markdown syntax
=====================

The following is a quick overview of basic text formatting in Markdown.
Use the anchors for quick navigation.

* [Headings](#headings)
* [Paragraphs](#paragraphs)
* [Text Highlighting](#text-highlighting)
* [Links](#links)
* [Lists](#lists)
* [Tables](#tables)
* [Images](#images)

### Headings {#headings}

```
# This is the H1 heading
## This is heading H2
### This is heading H3
#### This is heading H4

Alternative notation for headings H1 and H2:

This is heading H1
==================

This is heading H2
------------------
```

# This is the heading of H1
## This is the heading of H2
### This is the heading of H3
#### This is heading H4

Alternative notation for headings H1 and H2:

This is heading H1
==================

This is heading H2
------------------


___________________________________________________________________________________________________________________________________________
### Paragraphs {#paragraphs}

Paragraphs are separated by one or more blank lines.
Within the text of a paragraph, any line breaks are not relevant to the resulting formatting.

    This is the first paragraph. The text continues. The text continues. The text continues. And it goes on. And the end.

    This is the second paragraph. This is also part of the second paragraph.
    And this is still part of the second paragraph.
    And then this.
    The end of the second paragraph.

This is the first paragraph. The text continues. The text is still going on. The text is still going on. And it goes on. And the end.
                                                                                                          
This is the second paragraph. This is also part of the second paragraph.
And this is still part of the second paragraph.
And then this.
The end of the second paragraph.

#### Line breaks

To wrap a line within a paragraph (like Shift+Enter in Word), you need to end that line with two or more spaces.

    Paragraph 1
    still content of paragraph 1

    Paragraph 2<space><space>  
    with a line break

Paragraph 1
still content of paragraph 1

Paragraph 2  
with broken line


___________________________________________________________________________________________________________________________________________
### Highlighting text {#text-highlighting}

    *this will be italics*  
    _this is also an italic_

    **This will be "bold"**  
    __And this one's gonna be "bold"__
    
    Can be combined: Read carefully, this is _**really important!**_ Something _**big** is on the horizon_.

*this will be italics*  
_this is also an italic_

**This will be "bold"**  
__And this one's gonna be "bold"__

Can be combined: Read carefully, this is _**really important!**_ Something _**big** is on the horizon_.


___________________________________________________________________________________________________________________________________________
### Links {#links}

The rules for writing a link are as follows:

    Direct address entry

    [Link Text](http://address/)
    [Link Text](http://address/ "headline")

    Reference

    [Link Text][1]
    [Text of another link][2]
    [Text of link with named reference][interesting link]

    The list of references can be placed at the end of the text, for example.

    [1]: http://address/
    [2]: http://another.address/ "Optional title" 
    [interesting link]: http://another.address/ (Otherwise written headline)

All freely typed addresses starting with _www._, _http://_, _https://_, or _e-mails_ are automatically converted to a clickable link.

    Links:

    http://www.atk14.net/ - automatically!  
    [ATK14 framework pages](http://www.atk14.net/)  
    [Captioned link](https://duckduckgo.com/ "Search engine without snooping")  
    References: [Basic application skeleton][1]  
    Named Reference:[Embryo][embryo] can't do much yet

    Emails:  

    info@example.com - automatically  
    [Email us](mailto:info@example.com)

    Reference list:

    [1]: http://skelet.atk14.net/ "ATK14 Skeleton"
    [embryo]: http://embryo.atk14.net/ (ATK14 Embryo)

Links:
                                                                             
http://www.atk14.net/ - automatically!  
[ATK14 framework pages](http://www.atk14.net/)  
[Captioned link](https://duckduckgo.com/ "Search engine without snooping")  
References: [Basic application skeleton][1]  
Named Reference:[Embryo][embryo] can't do much yet
                                                                             
Emails:  
                                                                             
info@example.com - automatically  
[Email us](mailto:info@example.com)
                                                                             
Reference list:
                                                                             
[1]: http://skelet.atk14.net/ "ATK14 Skeleton"
[embryo]: http://embryo.atk14.net/ (ATK14 Embryo)

**Note:**  
You will have noticed that the _List of References_ is not displayed in the final text. This is because when transforming Markdown to HTML it is more efficient to
to replace the references back to the places that reference them. When converting to a print format (e.g. PDF), it may again be more convenient to list the references
to keep them visible.

___________________________________________________________________________________________________________________________________________
### Lists {#lists}

#### Unsorted lists

    To write a list, we use hyphens...

    - apple
    - pear
    - pea

    ... or asterisks.

    * peach
    * nectarine
    * cucumber

    We conveniently tag the items in the list.

    * bowl, **vision**
    * _tested tools_ (www.atk14.net, [GitHub](https://github.com/))
    * ... and more

    It's simple.

To write a list, we use hyphens...

- apple
- pear
- pea

... or asterisks.

* peach
* nectarine
* cucumber

We conveniently tag the items in the list.

* bowl, **vision**
* _tested tools_ (www.atk14.net, [GitHub](https://github.com/))
* ... and more

It's simple.

#### Sortable lists

    We number the items in a sorted list.

    1. Peter Venkman
    2. Ray Stantz
    3. Egon Spengler
    4. Winston Zeddemore

    That's it.

We number the items in a sorted list.

1. Peter Venkman
2. Ray Stantz
3. Egon Spengler
4. Winston Zeddemore

That's it.

#### Nested Lists

    Nested list items are indented by two spaces.

    * Item 1
      * Item 1a
      * Item 1a
    * Item 2
      * Item 2a
      * Item 2b

    Sorted and unsorted lists can be combined.

    1. Item 1
      * Item 1a
      * Item 1a
    2. Item 2
      * Item 2a
      * Item 2b

Nested list items are indented by two spaces.

* Item 1
  * Item 1a
  * Item 1a
* Item 2
  * Item 2a
  * Item 2b

Sorted and unsorted lists can be combined.

1. Item 1
  * Item 1a
  * Item 1a
2. Item 2
  * Item 2a
  * Item 2b


___________________________________________________________________________________________________________________________________________
### Tables {#tables}

The table notation is as follows.

```
| First header            | Second header           |
|-------------------------|-------------------------|
| Contents for 1st cell   | Contents for 2nd cell   |
| Contents for 1st column | Contents for 2nd column |
| Next Content            | Next Content            |
```

will be rendered as:

| First header            | Second header           |
|-------------------------|-------------------------|
| Contents for 1st cell   | Contents for 2nd cell   |
| Contents for 1st column | Contents for 2nd column |
| Next Content            | Next Content            |

There is no need to keep the width of the cells in the same column. Spaces are added only to increase the readability of the table in the source text. The table can be written like this:

```
|First header|2nd header|third...|Header D|Header E|
|-|-|-|-|-|
|alpha|beta|gama|delta|epsilon|
```

|First header|2nd header|third...|Header D|Header E|
|-|-|-|-|-|
|alpha|beta|gama|delta|epsilon|

More about tables can be found in [separate chapter](../tables/)


___________________________________________________________________________________________________________________________________________
### Images {#images}

The rule for writing an image is as follows:

    ![Alt text](ImageUrl)

Alternatively:

    ![Alt text](ImageUrl "Title text")

Thus, a specific example:

    ![Image with kitten](https://placekitten.com/g/400/300 "Time for a cute pet!")

![Image with kitten](https://placekitten.com/g/400/300 "Time for a cute pet!")
