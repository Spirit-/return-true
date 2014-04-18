<?php
/**
 * User: BrSpirit
 * Date: 19-lut-2014
 */
header('Content-type: text/html; charset=utf-8');
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta http-equiv="refresh" content="3;url=http://www.google.com/" />
</head>
    <body>
<!--    <script language="JavaScript">-->
<!--        if(error == true){-->
<!--            // Your application has indicated there's an error-->
<!--            window.setTimeout(function(){-->
<!--                window.location.href = "--><?php //echo $uri?><!--";-->
<!--            }, 5000);-->
<!--        }-->
<!--    </script>-->
        <div style="border: 1px black inherit">
            <center>
                <?php echo $message;?><br />
                Za chwilę zostaniesz przeniesiony. Jeśli przeglądarka nie przeniesie Cię automatycznie kliknij <u><a href="<?php echo $uri?>">tutaj</a></u>
            </center>
        </div>
<!--        --><?php //die('koniec');?>

    </body>
</html>