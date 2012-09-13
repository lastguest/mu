<?php

/**
 * µ PHP microframework
 *
 * @author Stefano Azzolini <lastguest@gmail.com>
 */

class µ{function __callStatic($n,$a){static $r;$s=$_SERVER;return $n=='_'?@$r[$s[REQUEST_METHOD]][$s[REDIRECT_URL]]():$r[$n][$a[0]]=$a[1];}}
