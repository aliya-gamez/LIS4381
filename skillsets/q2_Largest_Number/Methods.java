/* q2 Largest Number */

import java.util.Scanner;

public class Methods 
{
    public static void getRequirements()
    {
        System.out.println("Developer: Alex Gamez");
        System.out.println("Program evaluates the largest integer");
        System.out.println("NOTE: Program does *not* check for non-numeric or non-integer characters");
        System.out.println(); //blank line
    }

    public static void largestNumber()
    {
        //DECLARTIONS
        int num1, num2;
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter first integer: ");
        num1 = sc.nextInt();
        System.out.println();

        System.out.print("Enter second integer: ");
        num2 = sc.nextInt();
        System.out.println();

        if(num1 > num2)
        {
            System.out.println(num1 + " is larger than " + num2);
        }
        else if(num1 < num2)
        {
            System.out.println(num2 + " is larger than " + num1);
        }
        else 
        {
            System.out.println("Integers are equal.");
        }
    }

    public static int getNum()
    {
        Scanner sc = new Scanner(System.in);
        return sc.nextInt();
    }

    public static void evaluateNumber(int num1, int num2)
    {
        System.out.println();
        if(num1 > num2)
        {
            System.out.println(num1 + " is larger than " + num2);
        }
        else if(num1 < num2)
        {
            System.out.println(num2 + " is larger than " + num1);
        }
        else 
        {
            System.out.println("Integers are equal.");
        }
        return;
    }
}
