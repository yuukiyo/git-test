<?php

echo execute();

function execute() {

    $return = "";
    $return .= a();

    return "$return\n";
}

function a() {
  return "あいうえお\n";
}
