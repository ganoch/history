<?php
    require_once("../config.php");
    require_once("../lib/logger.php");
    require_once("../lib/svn.php");
    require_once("../lib/mysql.php");
    require_once("../lib/lib.php");
    //OD CONFIG
    DataHandler::setup($mysql_host, $mysql_db, $mysql_user, $mysql_pass);
    SvnWrapper::setup();
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SVN History</title>
<link href="/css/main.css" rel="stylesheet" />
<script src="/scripts/jquery-1.11.0.js"></script>
<script src="/scripts/main.js"></script>
</head>
<body>
<?php include("_menu.php")?>