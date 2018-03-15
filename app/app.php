<?php

echo `curl https://cmyip.com 2>/dev/null | grep -o "My IP Address is [0-9\.]*"`;

echo '<br><br>';

print_r($_REQUEST);