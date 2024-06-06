<?php

spl_autoload_register( function ( $className ) {
    $BASE_DIR = "ds/";
    require_once "{$BASE_DIR}{$className}.php";
} );