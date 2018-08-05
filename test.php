<?php
use PHPUnit\Framework\TestCase;

        class InputTest extends TestCase
        {
            public function testEmpty()
            {
                $input = $_POST['msg'];
                $this->assertEmpty($input);

                return $input;
            }
        };
?>