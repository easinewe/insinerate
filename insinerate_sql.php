<?php 

    // Replace these values with your specific information!
    //$hostname = "insinerate1128.db.10820843.hostedresource.com";
    $hostname = "localhost";
    $username = "insinerate1128";
    $password = "Mambo#05";
    $database = "insinerate1128";
	//this was "blogs"

	// connect to the MySQL server
    $dbc = @mysql_connect ($hostname, $username, $password) OR die("Could not connect to database!");
    // this resets the encoding to uft8 so we can see special characters
	mysql_query('set names utf8');
    
	// select the database this site will use
    @mysql_select_db($database) OR die("Could not select database.");

    // "clean up" any string data to prevent bad entries and errors.
    function escape_data($data) {
        global $dbc;
        if (ini_get('magic_quotes_gpc')) {
            $data = stripslashes($data);
        }
        return mysql_real_escape_string(trim($data), $dbc);
    }
    
?>  


