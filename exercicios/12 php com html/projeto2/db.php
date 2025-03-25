<?php

function db(){
    return $db = new PDO('sqlite:../../maindb.sqlite');
}