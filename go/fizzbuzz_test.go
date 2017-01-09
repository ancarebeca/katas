package go_katas

import (
	"testing"

	. "github.com/onsi/gomega"
)

func Test_WhenInputIsNotMultipleOfThreeOrFice_ItShouldReturnTheSameNumber(t *testing.T) {
	RegisterTestingT(t)
	Expect(FizzBuzz(1)).To(Equal("1"))
	Expect(FizzBuzz(2)).To(Equal("2"))
}

func Test_WhenInputIsMultipleOfThree_ItShouldReturnFizz(t *testing.T) {
	RegisterTestingT(t)
	Expect(FizzBuzz(3)).To(Equal(fizz))
	Expect(FizzBuzz(12)).To(Equal(fizz))
}

func Test_WhenInputIsMultipleOfFive_ItShouldReturnBuzz(t *testing.T) {
	RegisterTestingT(t)
	Expect(FizzBuzz(5)).To(Equal(buzz))
	Expect(FizzBuzz(40)).To(Equal(buzz))
}

func Test_WhenInputIsMultipleOfBothThreeAndFive_ItShouldReturnFizzBuzz(t *testing.T) {
	RegisterTestingT(t)
	Expect(FizzBuzz(15)).To(Equal(fizzbuzz))
	Expect(FizzBuzz(30)).To(Equal(fizzbuzz))
}
