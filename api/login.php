<?php

    $arruser = array(
        '0' => Array('id' => 1
                    , 'user' => 'admin'
                    , 'pass' => md5('admin')
                    , 'name' => 'Administrator'    
                ),
        '1' => Array('id' => 2
                , 'user' => 'admin1'
                , 'pass' => md5('admin1')  
                , 'name' => 'Administrator1'    
                ),
    );

    $user = $_POST['username'];
    $pass = $_POST['password'];

    foreach($arruser as $v){
        if($user == $v['user'] && md5($pass) == $v['pass']){
            print_r(json_encode($v));
        }
    }

    