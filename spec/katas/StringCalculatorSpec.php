<?php

namespace spec\katas;

use katas\StringCalculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('katas\StringCalculator');
    }

    function it_returns_empty()
    {
        $this->add(StringCalculator::EMPTY_STRING)->shouldReturn(0);
    }

    function it_returns_one()
    {
        $this->add("1")->shouldReturn(1);
    }

    function it_sums_two_numbers()
    {
        $this->add("1,1")->shouldReturn(2);
        $this->add("1,2")->shouldReturn(3);
    }

}

//1 Create a simple String calculator with a method int Add(string numbers)
//  * The method can take 0, 1 or 2 numbers, and will return their sum (for an empty string it will return 0) for example “” or “1” or “1,2”
//  * Start with the simplest test case of an empty string and move to 1 and two numbers
//* Remember to solve things as simply as possible so that you force yourself to write tests you did not think about
//* Remember to refactor after each passing test