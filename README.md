TwigInflection
==============

pluralize
---------


``` jinja

{{ "chicken"|pluralize }}

=> chickens

{{ rows.length }} {{ "row"|pluralize(rows.length) }}

=> 1 row
=> 2 rows

{{ users.length }} {{ "person"|pluralize(users.length, "users") }}

=> 1 person
=> 2 users

```

singularize
-----------

The opposite of pluralize, working in the same manner

``` jinja 

{{ "chickens"|singularize }}

=> chicken

```


Contributing
------------

Get in touch before hacking on anything, I've no idea what I might be doing, the
whole library may have changed since my last push :)

Copyright
---------

Copyright (c) 2013 Dave Marshall. See LICENCE for further details

