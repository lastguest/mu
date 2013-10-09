<?php

/**
 * µ PHP microframework
 *
 * @author Stefano Azzolini <lastguest@gmail.com>
 */

class µ{static function __callStatic($n,$a){static$r;return$n=='_'?@$r[getenv(REQUEST_METHOD).getenv(REQUEST_URI)]():$r[$n.$a[0]]=$a[1];}}
