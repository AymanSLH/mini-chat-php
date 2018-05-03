<?php
if (isset($_GET['golog']))
{
    $data_base = new SQLite3('adaptive') ;
    $raw_result = $data_base->query("Select email , password, id  , name from student") ;

    while ($row = $raw_result->fetchArray())
    {
        if ($row['email'] ==  $_GET['email']  && $row['password'] == $_GET['password'])
        {
            $the_id = $row['id'] ;
            $the_name = $row['name'] ;
            setcookie('logincookie' , $the_id, time() + 3000 , '/')  ;
            setcookie('loginname'   , $the_name, time() + 3000 , '/')  ;
            header('Location: index.php');
