<?php
session_start();

session_destroy();

if(isset($_SESSION['username'])) { 
	unset($_SESSION['username']); 
}