<?php
/**
 * SELECT * FROM sqlinjection WHERE content = '1' or if(1=1, sleep(3),1); --+'
 */
require_once "../../common/common.php";
if (isset($_POST["keyWordName"])) {
    if (!empty($_POST["keyWordName"])) {
        $sql = "SELECT * FROM sqlinjection WHERE content = '{$_POST["keyWordName"]}'";
        $res = $dbConnect->query($sql) or die("Invalid query: " . mysqli_stmt_error(). $sql);
    }
}
require_once TPMELATE."/post-injection.html";


