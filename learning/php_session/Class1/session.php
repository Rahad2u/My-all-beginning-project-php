<?php
session_name('test_session');
session_start();
echo $_SESSION['test_session'];