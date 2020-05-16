<?php
error_reporting(E_ALL ^ E_DEPRECATED);

class dbFix {
	public $conn;
}

$_db = new \dbFix();

if (!function_exists('mysql_connect')) {	
	function mysql_connect($server,$user,$password="",$newlink=false,$flags=0) {
		global $_db;
		$conn = mysqli_connect($server, $user, $password);	
		$_db->conn = $conn;
		return $conn;
	}
}
if (!function_exists('mysql_select_db')) {
	function mysql_select_db($database_name, $link=false) {
		global $_db;
		return mysqli_select_db($_db->conn, $database_name);
	}
}
if (!function_exists('mysql_affected_rows')) {
	function mysql_affected_rows($ident = null) {
		global $_db;
		return mysqli_affected_rows($_db->conn);
	}
}
if (!function_exists('mysql_close')) {
	function mysql_close($ident = null){
		global $_db;
		return mysqli_close($_db->conn);
	}
}

if (!function_exists('mysql_errno')) {
	function mysql_errno($ident = null){
		global $_db;
		return mysqli_errno($_db->conn);
	}
}

if (!function_exists('mysql_error')) {
	function mysql_error($ident = null){
		global $_db;
		return mysqli_error($_db->conn);
	}
}

if (!function_exists('mysql_escape_string')) {	
	function mysql_escape_string($string){
		global $_db;
		return mysqli_real_escape_string($_db->conn, $string);
	}
}

if (!function_exists('mysql_real_escape_string')) {
	function mysql_real_escape_string($string){
		global $_db;
		return mysqli_real_escape_string($_db->conn, $string);
	}
}

if (!function_exists('mysql_fetch_array')) {
	function mysql_fetch_array($result, $int=null){
		global $_db;
		return mysqli_fetch_array($result);
	}
}
    
if (!function_exists('mysql_fetch_assoc')) {
	function mysql_fetch_assoc($result){
		return mysqli_fetch_assoc($result);
	}
}   
    
if (!function_exists('mysql_fetch_field')) {
	function mysql_fetch_field($result, $offset = 0){
		return mysqli_fetch_field($result);
	}
}   

if (!function_exists('mysql_fetch_object')) {
	function mysql_fetch_object($result){
		return mysqli_fetch_object($result);
	}
}
if (!function_exists('mysql_fetch_row')) {
	function mysql_fetch_row($result){
		return mysqli_fetch_row($result);
	}
}
if (!function_exists('mysql_free_result')) {
	function mysql_free_result($result){
		return mysqli_free_result($result);
	}
}   
if (!function_exists('mysql_insert_id')) {
	function mysql_insert_id($res){
		global $_db;
		return mysqli_insert_id(is_null($res) ? $_db->conn : $res);
	}
} 	
if (!function_exists('mysql_list_dbs')) {
	function mysql_list_dbs($result){
		return mysqli_list_dbs($result);
	}
} 
if (!function_exists('mysql_list_dbs')) {
	function mysql_list_dbs($result){
		return mysqli_list_dbs($result);
	}
}
if (!function_exists('mysql_query')) {
	function mysql_query($query, $res=null){
		global $_db;
		return mysqli_query($_db->conn, $query);
	}
} 
if (!function_exists('mysql_num_rows')) {
	function mysql_num_rows($result){
		return mysqli_num_rows($result);
	}
}
if (!function_exists('mysql_num_rows')) {
	function mysql_num_rows($result){
		return mysqli_num_rows($result);
	}
} 	
if (!function_exists('mysql_ping')) {
	function mysql_ping($resource = null){
		global $_db;
		return mysqli_ping($_db->conn);
	}
} 
if (!function_exists('mysql_set_charset')) {
	function mysql_set_charset($cname, $res){
		global $_db;
		return mysqli_set_charset($_db->conn, $cname);
	}
} 
if (!function_exists('mysql_stat')) {
	function mysql_stat($link = null) {
		global $_db;
		return mysqli_stat($_db->conn);
	}
}
		 	
if (!function_exists('mysql_tablename')) {
	function mysql_tablename($resource) {
		return mysqli_tablename($resource);
	}
}
   
if (!function_exists('mysql_thread_id')) {
	function mysql_thread_id($res = null) {
		global $_db;
		return mysqli_thread_id($_db->conn);
	}
} 

if (!function_exists('mysql_unbuffered_query')) {
	function mysql_unbuffered_query($query, $con=null) {
		global $_db;
		return mysqli_query($_db->conn, $query);
	}
} 

if (!function_exists('mysql_get_server_info')) {
	function mysql_get_server_info($con=null) {
		global $_db;
		return mysqli_get_server_info($_db->conn);
	}
}  

if (!function_exists('call_user_method_array')) {
	function call_user_method_array($method, $object, $array) {
		return call_user_func_array(array($object, $method), $array);
	}
}  
    
    
