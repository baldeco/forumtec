<?php

require_once('inc/inc.config.php');

if ($user->is_logged()) $user->logout();

header('Location: index.php');