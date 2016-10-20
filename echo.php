<?php

echo execute();

function execute() {

    $return = "";
    $return .= a();
    $return .= ka();

    return "$return\n";
}

function a() {
  return "あいうえお\n";
}

function ka() {
  return "かきくけこ";
}
