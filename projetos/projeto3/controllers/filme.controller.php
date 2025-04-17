<?php

$filme = (new DB)->filme($_REQUEST['id']);
view('filme', ['filme' => $filme]);

?>