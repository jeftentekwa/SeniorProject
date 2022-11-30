<?php

session_start();

session_destroy();

header("Location: lognInForm.php");
exit;