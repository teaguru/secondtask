<?php
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=countries',
    'root', '' );
session_start();