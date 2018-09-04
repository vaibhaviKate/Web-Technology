<?php
session_start();

session_destroy();

echo "<script> window.open('wt.html', '_self'); </script>"
?>