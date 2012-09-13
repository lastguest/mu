h1. µ

a Sinatra inspired PHP microframework in only 140 bytes.

bc. class µ{function __callStatic($n,$a){static $r;$s=$_SERVER;return $n=='_'?@$r[$s[REQUEST_METHOD]][$s[REDIRECT_URL]]():$r[$n][$a[0]]=$a[1];}}

h3. How to use

Sometimes, there may be artefacts left over when switching from master to production. These are files that are ignored by Git and are easily cleaned up by running

1. Define routes callbacks
	
bc. µ::GET('/',function(){
bc. 	echo 'What is your name?';
bc. 	echo '<form method=post><input type=text name=username><input type=submit></form>';
bc. });
	
bc. µ::POST('/',function(){
bc. 	echo 'Hello ',$_POST['username'],', how are you?';
bc. });

2. Run the app
	
bc. µ::_();

3. Breath.

h2. License (MIT)

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
