import java.util.Scanner;

import javax.lang.model.util.ElementScanner14;

public class Methods 
{
    public static void getRequirements()
    {
        System.out.println("\nDeveloper: Alex Gamez.");
        System.out.println("Program evaluates largest of three integers");
        System.out.println("Note: Program checks for integers and non-numeric values.");
        System.out.println(); //blank line
    }

    public static void validateUserInput()
    {
        Scanner sc = new Scanner(System.in);
        int num1 = 0, num2 = 0, num3 = 0;

        //prompt user for three different integers
        System.out.print("Please enter the first number: ");
        while(!sc.hasNextInt())
        {
            System.out.println("Not a valid integer!\n");
            sc.next();
            System.out.print("Please try again. Enter the first number: ");
        }
        num1 = sc.nextInt();

        System.out.print("Please enter the second number: ");
        while(!sc.hasNextInt())
        {
            System.out.println("Not a valid integer!\n");
            sc.next();
            System.out.print("Please try again. Enter the second number: ");
        }
        num2 = sc.nextInt();

        System.out.print("Please enter the third number: ");
        while(!sc.hasNextInt())
        {
            System.out.println("Not a valid integer!\n");
            sc.next();
            System.out.print("Please try again. Enter the third number: ");
        }
        num3 = sc.nextInt();

        System.out.println(); //blank line
        getLargestNumber(num1, num2, num3);
    }

    public static void getLargestNumber(int num1, int num2, int num3)
    {
        System.out.println("Numbers entered: " + num1 + ", " + num2 + ", " + num3);

        if(num1 > num2 && num1 > num3)
            System.out.println(num1 + " is largest.");
        else if(num2 > num1 && num2 > num3)
            System.out.println(num2 + " is largest.");
        else if(num3 > num1 && num3 > num2)
            System.out.println(num3 + " is largest.");
        else
            System.out.println("Integers are equal.");
    }

}
