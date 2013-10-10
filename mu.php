<?php

/**
 * µ PHP microframework - Hardcore Version
 *
 * @author Stefano Azzolini <lastguest@gmail.com>
 */

function µ($a=0,$b=0){static$r;$a?$r[$a]=$b:@$r[getenv(REQUEST_METHOD).' '.getenv(REQUEST_URI)]();}
