Tables
======

Basic text highlighting, links and inline html markup can be used in tables.

```
| First header                   | Second header               |
|--------------------------------|-----------------------------|
| Content                        | Další obsah                 |
| Content of the **3rd cell**    | Content of the  _4th cell_  |
| [Link](http://www.atk14.net/)  | <del>done</del>             |
```

is displayed as:

| First header                   | Second header               |
|--------------------------------|-----------------------------|
| Content                        | Další obsah                 |
| Content of the **3rd cell**    | Content of the  _4th cell_  |
| [Link](http://www.atk14.net/)  | <del>done</del>             |

### Table without header

In Markdown, each table must contain a header. However, if no value is filled in the header, the resulting table will not contain a header.


```
|         |         |         |
|---------|---------|---------|
| value 1 | value 2 | value 3 |
| value 4 | value 5 | value 6 |
```

is displayed as:

|         |         |         |
|---------|---------|---------|
| value 1 | value 2 | value 3 |
| value 4 | value 5 | value 6 |

### Values alignment to the right

Right alignment of text can be achieved by placing a colon to the right edge of the header separator.
This is useful not only for price lists.

```
| Action             | Price               |
|--------------------|--------------------:|
| Combing            | 90 CZK              |
| Sitting haircut    | 120 CZK             |
| Standing haircut   | 130 CZK             |
| Drying             | _by volume_         |
```

is displayed as:

| Act                | Price               |
|--------------------|--------------------:|
| Combing            | 90 CZK              |
| Sitting haircut    | 120 CZK             |
| Standing haircut   | 130 CZK             |
| Drying             | _by volume_         |

### Values alignment to the centre

Center alignment is achieved by writing colons on each side of the header separator.

```
| Day         | Color        |
|:-----------:|:------------:|
| Monday      | Blue         |
| Tuesday     | Gray         |
| Wednesday   | Ugly         |
```

is displayed as:

| Day         | Color        |
|:-----------:|:------------:|
| Monday      | Blue         |
| Tuesday     | Gray         |
| Wednesday   | Ugly         |

### Writing a table in HTML

Tables with a more complex structure can be written directly in HTML. However, Markdown text highlighting cannot be used in this case.

    <table>
      <thead>
        <tr>
          <th colspan="3" align="center">Sample table header</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="3" align="center">Sample table footer</td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th align="right" width="33%">Date</th>
          <td>04/30/2017</td>
          <td>Sunday</td>
        </tr>
        <tr>
          <th align="right">Time</th>
          <td>13:23</td>
          <td>HOUR</td>
        </tr>
        <tr>
          <th align="right">Situation</th>
          <td colspan="2">clear, warm, light breeze from the NW</td>
        </tr>
      </tbody>
    </table>

is displayed as:

<table>
  <thead>
    <tr>
      <th colspan="3" align="center">Sample table header</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td colspan="3" align="center">Sample table footer</td>
    </tr>
  </tfoot>
  <tbody>
    <tr>
      <th align="right" width="33%">Date</th>
      <td>04/30/2017</td>
      <td>Sunday</td>
    </tr>
    <tr>
      <th align="right">Time</th>
      <td>13:23</td>
      <td>HOUR</td>
    </tr>
    <tr>
      <th align="right">Situation</th>
      <td colspan="2">clear, warm, light breeze from the NW</td>
    </tr>
  </tbody>
</table>
