package main

import "fmt"

func GetPermutations(str string) []string {
	if len(str) <= 1 {
		return []string{str}
	}

	current := str[0:1]
	remStr := str[1:]

	perms := GetPermutations(remStr)

	allPerms := make([]string, 0)

	for _, perm := range perms {
		for i := 0; i <= len(perm); i++ {
			newPerm := insertAt(i, current, perm)
			allPerms = append(allPerms, newPerm)
		}
	}

	return allPerms
}

func insertAt(i int, char string, perm string) string {
	start := perm[0:i]
	end := perm[i:len(perm)]
	return start + char + end
}

func main() {
	fmt.Printf("All perms are - %v", GetPermutations("abb"))
}
