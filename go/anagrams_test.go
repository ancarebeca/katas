package main

import (
	"testing"

	. "github.com/onsi/gomega"
)

func Test_WhenInputIsEmpty_ItShouldReturnAnEmptyString(t *testing.T) {
	RegisterTestingT(t)

	values := GetPermutations("")
	Expect(values[0]).To(BeEmpty())
}

func Test_WhenInputIsOneCharacter_ItShouldReturnTheSameString(t *testing.T) {
	RegisterTestingT(t)

	values := GetPermutations("a")
	Expect(values[0]).To(Equal("a"))
}

func Test_WhenInputIsTeoCharacters_ItShouldReturnAnAnagram(t *testing.T) {
	RegisterTestingT(t)

	values := GetPermutations("ab")
	Expect(len(values)).To(Equal(2))
	Expect(values[0]).To(Equal("ab"))
	Expect(values[1]).To(Equal("ba"))

}

func Test_WhenInputIsThreeCharacters_ItShouldReturnAnAnagram(t *testing.T) {
	RegisterTestingT(t)

	values := GetPermutations("abc")
	Expect(len(values)).To(Equal(6))
	Expect(values[0]).To(Equal("abc"))
	Expect(values[1]).To(Equal("bac"))
	Expect(values[2]).To(Equal("bca"))
	Expect(values[3]).To(Equal("acb"))
	Expect(values[4]).To(Equal("cab"))
	Expect(values[5]).To(Equal("cba"))
}
