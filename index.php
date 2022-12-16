<?php
print("IP is : ");
print `hostname -I | awk '{print $1}'`;
?>
