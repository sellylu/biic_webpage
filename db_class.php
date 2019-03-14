<?php

class DB {
    var $_dbConn = 0;
    var $_queryResource = 0;
    
    function __construct() {
        //do nothing
    }
    
    function connect_db($host, $user, $pwd, $dbname) {
        $dbConn = mysqli_connect($host, $user, $pwd, $dbname);
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
        }
        mysqli_query($dbConn, "SET NAMES utf8");
        $this->_dbConn = $dbConn;
        return true;
    }
    
    function query($sql) {
        if (! $queryResource = mysqli_query($this->_dbConn, $sql))
            die ("MySQL Query Error".mysqli_error($this->_dbConn));
        $this->_queryResource = $queryResource;
        return $queryResource;        
    }
    
    /** Get array return by MySQL */
    function fetch_array() {
        return mysqli_fetch_array($this->_queryResource);
    }

    function get_num_rows() {
        return mysqli_num_rows($this->_queryResource);
    }

    /** Get the cuurent id */    
    function get_insert_id()
    {
        return mysqli_insert_id($this->_dbConn);
    } 
    
    function __destruct() {
        mysqli_close($this->_dbConn);
    }

}
?>