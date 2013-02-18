TwigInflection
==============

pluralize
---------

This allows you to pluralize a word, based on a count

``` twig

{{ 6|pluralize("chicken") }}  
{{ rows.length|pluralize("row") }}

```

The extension uses [doctrine/inflector](http://github.com/doctrine/inflector) to
guess the plural version of the word, but it can be optionally specified as an
additional argument

``` twig

{{ users.length|pluralize("person", "users") }}

```

Contributing
------------

Get in touch before hacking on anything, I've no idea what I might be doing, the
whole library may have changed since my last push :)

Copyright
---------

Copyright (c) 2013 Dave Marshall. See LICENCE for further details

