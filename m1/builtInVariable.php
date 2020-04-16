<?php
session_start();
/*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_COOKIE
    $_SESSION

*/

// 1 )$GLOBALS
    $a = 3;
    $b = 7;
    function add(){
    // 1
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b']; 
    //2 
        global $a,$b;
        $GLOBALS['c'] = $a + $b;
    }
    add();
    echo $c;

// 2 $_SERVER 
    var_dump($_SERVER['HTTP_USER_AGENT']); //good Information : Chrome or moz or ... ,

    var_dump($_SERVER['SERVER_NAME']); // localhost

// 3 SESSION
    /*
        1)
            اطلاعات کاربر شما به طور موقت  تا زمانی مرورگر باز است درخودش ذخیره می کند. 
            سمت سرور
        2)
            باشدHTML به موتور اجراکننده نیاز داره که باید قبل کد 
            session_start()
        3)
            در همه فایل ها قابل استفادس

    */

    // SET 
        $_SESSION['name'] = 'mohammad ali';
    // GET
        $_SESSION['name'] ;
    // DELETE your All sessions 
        session_unset();
        session_destroy();

// 4 Cookie
    /*
        شناسایی افراد
        جاسازی یک فایل کوچک در کامپیوتر کاربر
        سمت کلاینت
        باشد HTML باید قبل تگ
        functions =>> setcookie( name , value , expire , path , domain , secure )
    */
    setcookie('Text','Yes',time()+(86400 * 20)); // تا ۲۰ روز آینده ست می شود 

    // Delete Cookie
        setcookie('Text','Yes',time() - 1 ) ; // فقط زمان باید منفی باشد
