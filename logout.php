<?php
	session_start();
	session_unset($_SESSION['email']);
	session_destroy();

    echo'<script> window.location.href="index.html"; </script>';
?>