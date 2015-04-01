<?php
spl_autoload_register(function($className)
{
  include __DIR__ . "/src/" . $className . ".php";

});
