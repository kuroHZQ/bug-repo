<?php

require_once "../../common/common.php";
setcookie("flag", "", time() - 1);
if (isset($_GET["id"])) {
    if (!empty($_GET["id"])) {
        if (strstr($_GET['id'], 'alert')){
            $sql = "SELECT * FROM env_list WHERE id = 9";
            $res = $dbConnect->query($sql);
            $row = mysqli_fetch_assoc($res);
            setcookie("flag", $row['envFlag']);
        }
    }
}
require_once TPMELATE."/xss_1/index.html";


