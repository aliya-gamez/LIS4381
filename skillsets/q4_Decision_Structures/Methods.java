import java.util.Scanner;

import javax.lang.model.util.ElementScanner14;

public class Methods 
{
    public static void getRequirements()
    {
        System.out.println("\nDeveloper: Alex Gamez");
        System.out.println("Program evaluates user-entered characters");
        System.out.println("Use following characters: W or w, C or c, H or h, N or n.");
        System.out.println("Use following decision structures: if... else, and switch.");
        System.out.println(); //blank line
    }

    public static void getUserPhoneType()
    {
        String input1;
        char input; // declare user input variable
        Scanner sc = new Scanner(System.in); // declare scanner

        System.out.println("Phone types: W or w (work), C or c (cell), H or h (home), N or n (none).");
        
        System.out.print("Enter phone type: "); // get user input
        input1 = sc.next().toLowerCase();
        input = input1.charAt(0);

        System.out.println();

        System.out.println("if...else:");
        System.out.print("Phone type: ");
        if(input == 'w')
        {
            System.out.print("work");
        }
        else if(input == 'c')
        {
            System.out.print("cell");
        }
        else if(input == 'h')
        {
            System.out.print("home");
        }
        else if(input == 'n')
        {
            System.out.print("none");
        }
        else
        {
            System.out.print("INVALID CHARACTER ENTRY");
        }
        System.out.println();

        System.out.println("switch:");
        System.out.print("Phone type: ");
        switch(input)
        {
            case 'w':   System.out.print("work");
                        break;
            case 'c':   System.out.print("cell");
                        break;
            case 'h':   System.out.print("home");
                        break;
            case 'n':   System.out.print("none");
                        break;
            default:    System.out.print("INVALID CHARACTER ENTRY");
                        break;
        }


    }
}
