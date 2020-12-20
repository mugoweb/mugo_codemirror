eZPublish extension mugo_codemirror
==

This extension contains a new datatype to store HTML code in an class attribute.
The datatype is extending the eztext datatype. There are two differences:

* The output (`view.tpl`) is not escaped (no `wash()` operator)
* The input (`edit.tpl`) uses the javascript library [codemirror](https://codemirror.net/)

"CodeMirror is a versatile text editor implemented in JavaScript for the browser. It is specialized for editing code, and comes with a number of language modes and addons that implement more advanced editing functionality."

Currently, the extension only allows to edit HTML, CSS and Javascript code.
