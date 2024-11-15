import java.util.Scanner;

public class FactorialCalculator {
    // Method to calculate factorial of a number
    public static long factorial(int n) {
        if (n < 0) {
            throw new IllegalArgumentException("Number must be non-negative.");
        }
        long result = 1;
        for (int i = 1; i <= n; i++) {
            result *= i;
        }
        return result;
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Prompt user for input
        System.out.print("Enter a non-negative integer: ");
        int number = scanner.nextInt();

        try {
            long fact = factorial(number);
            System.out.println("Factorial of " + number + " is: " + fact);
        } catch (IllegalArgumentException e) {
            System.out.println("Error: " + e.getMessage());
        }

        scanner.close();
    }
}
