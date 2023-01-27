import java.util.Scanner;
import java.util.*;
import java.lang.*;

public class Methods 
{
    public static void getRequirements()
    {
        System.out.println("\nDeveloper: Alex Gamez");
        System.out.println("Print minimum and maximum integer values.");
        System.out.println("Program prompts user to enter desired number of psuedorandom-generated intergers (min 1).");
        System.out.println("Use following loop structures: for, enhanced for, while, do...while.");
        System.out.println(""); //blank line
        System.out.println("Integer.MIN_VALUE = -214783648");
        System.out.println("Integer.MAX_VALUE = 2147483647");
        System.out.println(""); //blank line
    }    

    public static void doRan()
    {
        Scanner sc = new Scanner(System.in);
        int range1, range2, inputNum;

        range1 = -2147483648;
        range2 = 2147483647;

        System.out.print("Enter desired number of psuedorandom-generated integers (min 1): ");
        inputNum = sc.nextInt();

        // FOR LOOP
        System.out.println("for loop: ");
        for(int i = 0; i < inputNum; i++)
        {
            System.out.println(randInt(range1, range2));
        }
        System.out.println("");

        // ENHANCED FOR LOOP
        System.out.println("Enhanced for loop: ");
        int [] intArray = new int[inputNum];
        for(int i = 0; i < inputNum; i++)
        {
            intArray[i] = randInt(range1, range2);
        }
        for(int i : intArray)
        {
            System.out.println(i);
        }
        System.out.println("");

        // WHILE LOOP
        System.out.println("while loop");
        int count = 0;
        while(count < inputNum)
        {
            System.out.println(randInt(range1, range2));
            count++;
        }
        System.out.println("");

        // DO...WHILE LOOP
        System.out.println("do...while loop");
        int x = 0;
        do
        {
            System.out.println(randInt(range1, range2));
            x++;
        }
        while(x < inputNum);
        System.out.println("");
    }

    public static int randInt(int range1, int range2)
    {
        Random ran = new Random();

        int rando = ran.nextInt(range1, range2);
        return rando;
    }
}
