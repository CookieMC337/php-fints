<?php

namespace Tests\DataElements;

use Abiturma\PhpFints\DataElements\Bin;
use Tests\TestCase;


class BinTest extends TestCase
{

    public function setUp(): void
    {

        parent::setup();
    }

    /** @test */
    public function a_string_is_encapsuled_in_the_bin_format()
    {
        $testString = 'testString'; 
        $this->assertEquals('@10@testString', (new Bin($testString))->toString()); 
    }
    
    /** @test */
    public function special_characters_are_not_escaped_within_bin_data_fields()
    {
        $testString = 'test?@string'; 
        $this->assertEquals('@12@test?@string', (new Bin($testString))->toString()); 
    }
    

}

