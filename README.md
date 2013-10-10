# µ - Hardcore version

a Sinatra inspired PHP microframework in only 99 bytes.

[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/lastguest/mu/badges/quality-score.png?s=e29b47be8993b94957e9e6e9f37edd6184f6c753)](https://scrutinizer-ci.com/g/lastguest/mu/)

**Warning: This is a pure proof of concept of a tweet sized URL router**

**DO NOT USE IT IN PRODUCTION!**

```php
function µ($a=0,$b=0){static$r;$a?$r[$a]=$b:@$r[getenv(REQUEST_METHOD).' '.getenv(REQUEST_URI)]();}
```

### How to use

**Step 1:** Define routes callbacks

```php
µ('GET /',function(){
    echo 'What is your name?';
    echo '<form method=post><input type=text name=username><input type=submit></form>';
});
```
	
```php
µ('POST /',function(){
    echo 'Hello ',$_POST['username'],', how are you?';
});
```

**Step 2:** Run the app
	
```php
µ();
```

**Step 3:** Breath.

## Thanks

[celtric](https://github.com/celtric)
[Tyler Romeo (Parent5446)](https://github.com/Parent5446)



## License (MIT)

Copyright (c) 2012 Stefano Azzolini

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
