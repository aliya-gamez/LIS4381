import java.util.Scanner;
import java.util.*;
import java.lang.*;

public class Methods 
{
    public static void getRequirements()
    {
        System.out.println("Developer: Alex Gamez");
        System.out.println("Program evaluates integers as even or odd");
        System.out.println("NOTE: Program does *not* check for non-numeric characters");
        System.out.println(); //blank line
    }

    public static void evaluateNumber()
    {
        //DECLARTION
        int x = 0;

        System.out.print("Enter integer: ");
        Scanner sc = new Scanner(System.in);
        x = sc.nextInt();

        if(x % 2 == 0)
        {
            System.out.println(x + " is an even number.");
        }
        else
        {
            System.out.println(x + " is an odd number");
        }
    }
}
