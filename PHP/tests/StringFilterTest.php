<?php
class StringFilterTest extends PHPUnit_Framework_TestCase
{

  public function testCamelCaseToUnderscore()
  {
    $camel = "CamelCaseToUnderScore";
    $underscore = "camel_case_to_under_score";

    $filter = new StringFilter();
    $this->assertEquals($underscore, $filter->camelCaseToUnderscore($camel));
  }


  public function testCamelCaseToSpace()
  {
    $camel = "CamelCaseToSpace";
    $spaceLower = "camel case to space";
    $space = "Camel Case To Space";

    $filter = new StringFilter();
    $this->assertEquals($space, $filter->camelCaseToSpace($camel, false));


    $this->assertEquals($spaceLower, $filter->camelCaseToSpace($camel, true));
  }

}
