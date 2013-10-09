<?php

/**
 * µ PHP microframework
 *
 * @author Stefano Azzolini <lastguest@gmail.com>
 */

class µ{function __call($n,$a){static$r;$n=='_'?@$r[$_ENV[REQUEST_METHOD].$_ENV[REQUEST_URI]]():$r[$n.$a[0]]=$a[1];}}
