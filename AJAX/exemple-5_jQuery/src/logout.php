<?php
session_start();
require_once('utils.php');

logout();

header('location:../index.php');