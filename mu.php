<?php

/**
 * µ PHP microframework - Hardcore Version
 *
 * @author Stefano Azzolini <lastguest@gmail.com>
 */

class µ{function __call($n,$a){static$r;return$n=='_'?@$r[getenv(REQUEST_METHOD).getenv(REQUEST_URI)]():$r[$n.$a[0]]=$a[1];}}
