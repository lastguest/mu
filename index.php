<?php

/**
 * µ PHP microframework
 *
 * @author Stefano Azzolini <lastguest@gmail.com>
 */


include 'mu.php';

/**
*
* Define routes callbacks with this syntax :
*	µ::METHOD('ROUTE',CALLBACK);
*
*	- METHOD can be GET,POST,PUT,DELETE,HEAD or some custom HTTP verb
*	- ROUTE is the URL path fragment
*	- CALLBACK is a callable object () invoked by the router.
*/



µ::GET('/',function(){
	echo 'What is your name?';
	echo '<form method=post><input type=text name=username><input type=submit></form>';
});

/**
*	This is executed only when the browser call a POST on '/' route
*/

µ::POST('/',function(){
	echo 'Hello ',$_POST['username'],', how are you?';
});


/**
*	Invoke the phpinfo function on /php/info route
*/

µ::GET('/php/info','phpinfo');


/**
*	Run the application
*/

µ::_();
