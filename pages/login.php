<?php

include_once "../database/init.php";
include_once "../templates/auth.php";
include_once "../templates/default.php";

draw_header(null);
draw_login();
draw_footer();

?>