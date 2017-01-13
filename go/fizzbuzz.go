package main

import "strconv"

const fizz = "Fizz"
const buzz = "Buzz"
const fizzbuzz = "FizzBuzz"

func FizzBuzz(input int) string {
	if isMultipleOfThree(input) && isMultipleOfFive(input) {
		return fizzbuzz
	} else if isMultipleOfFive(input) {
		return buzz
	} else if isMultipleOfThree(input) {
		return fizz
	} else {
		return strconv.Itoa(input)
	}
}

func isMultipleOfThree(input int) bool  {
	if input%3 == 0 {
		return true
	} else {
		return false
	}
}

func isMultipleOfFive(input int) bool  {
	if input%5 == 0 {
		return true
	} else {
		return false
	}
}
