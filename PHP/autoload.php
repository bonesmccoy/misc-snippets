<?php

function __autoload($className)
{
  include __DIR__ . "/src/". $className . ".php";
}
