#include <iostream>
using namespace std;

// Function to calculate factorial
long long factorial(int n) {
    if (n < 0) {
        throw invalid_argument("Number must be non-negative.");
    }
    long long result = 1;
    for (int i = 1; i <= n; i++) {
        result *= i;
    }
    return result;
}

int main() {
    int number;

    // Prompt user for input
    cout << "Enter a non-negative integer: ";
    cin >> number;

    try {
        long long fact = factorial(number);
        cout << "Factorial of " << number << " is: " << fact << endl;
    } catch (const invalid_argument& e) {
        cout << "Error: " << e.what() << endl;
    }

    return 0;
}
