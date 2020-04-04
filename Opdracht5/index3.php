<!DOCTYPE html>
<html>
<head>
    <title> PHP Opdracht</title>
    <style>

    </style>
</head>
<body>
<?php

$username  = $_POST["username"];
$password = $_POST["password"];

$ldapconn = ldap_connect("localhost")
or die("Could not connect to LDAP server.");

ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

$ldaprdn  = "cn=piet@worldonline.nl, cn=klaas@carpets.nl,cn=truushendriks@wegweg.nl, dc=designstudio1,dc=com";
$ldappass = "cn=doetje123, cn=snoepje777, cn=arkiearkie201 ";

if ($ldapconn) {


    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    if ($ldapbind) {

        echo "Welcome back, $username!";

    } else {
        echo "Authentication failed. Please check your username/password and try again.";
    }
}

?>
</body>

</html>