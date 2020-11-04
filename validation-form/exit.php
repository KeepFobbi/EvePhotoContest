<?php
setcookie('user', '1', time() - 3600, '/');
header('Location: /');