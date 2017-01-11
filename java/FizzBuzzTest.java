import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FizzBuzzTest {

	@Test
	public void getResultShouldReturnFizzIfTheNumberIsDividableBy3() {
		assertEquals("fizz", FizzBuzz.getResult(3));
	}

	@Test
	public void getResultShouldReturnBuzzIfTheNumberIsDividableBy5() {
		assertEquals("buzz", FizzBuzz.getResult(5));
		assertEquals("buzz", FizzBuzz.getResult(10));
	}

	@Test
	public void getResultShouldReturnBuzzIfTheNumberIsDividableBy15() {
		assertEquals("fizzbuzz", FizzBuzz.getResult(15));
		assertEquals("fizzbuzz", FizzBuzz.getResult(30));
	}

	@Test
	public void getResultShouldReturnTheSameNumberIfNoOtherRequirementIsFulfilled() {
		assertEquals("1", FizzBuzz.getResult(1));
		assertEquals("2", FizzBuzz.getResult(2));
		assertEquals("4", FizzBuzz.getResult(4));
	}

}