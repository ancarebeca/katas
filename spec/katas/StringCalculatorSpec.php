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

    function it_sums_more_than_two_numbers()
    {
        $this->add("1,1,4")->shouldReturn(6);
        $this->add("3,4,4")->shouldReturn(11);
    }

    function it_allows_lines_between_numbers()
    {
        $this->add("1\n2,3")->shouldReturn(6);
    }

    function it_supports_differtent_delimiters()
    {
        $this->add("//;\n1;2")->shouldReturn(3);
    }

    function it_not_allow_negative_number()
    {
        $this->shouldThrow(new \Exception('Negatives not allowed'))->during('add', array('-1'));
    }

    function it_numbers_bigger_than_one_thousand_should_be_ignored()
    {
        $this->add("2,1001")->shouldReturn(2);
        $this->add("3,2000")->shouldReturn(3);
    }

    function it_supports_delimiters_of_any_length()
    {
        $this->add("//[***]\n1***2***3")->shouldReturn(6);
    }
}


