<?php

//
// Kludged together by Ken Rice - SwK on #freeswitch/freenode
//

include("xmlrpc.inc");

$username = "freeswitch";
$password = "works";

$c=new xmlrpc_client("/RPC2", "localhost", 8080);
$c->setCredentials($username,$password,NULL);
// Play nice to PHP 5 installations with REGISTER_LONG_ARRAYS off

$stateno=(integer)$HTTP_POST_VARS["stateno"];
$f=new xmlrpcmsg('freeswitch.api',
        array(new xmlrpcval("show", "string"),new xmlrpcval("channels", "string"))
);


?>