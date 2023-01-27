import java.util.Scanner;

public class Methods 
{
    public static void getRequirements()
    {
        System.out.println("\nDeveloper: Alex Gamez");
        System.out.println("Program prompts user for first name and age, then prints results.");
        System.out.println("Create four methods from the following requirements: ");
        System.out.println("1) getRequirements(): Void method displays program requirements.");
        System.out.println("2) getUserInput(): Void method prompts for user input,\n\tthen calls two methods: myVoidMethod() and myValueReturningMethod().");
        System.out.println("3) myVoidMethod():\n\ta. Accepts two arguments: String and int.\n\tb. Prints user's first name and age.");
        System.out.println("4) myValueReturningMethod():\n\ta. Accepts two arguments: String and int.\n\tb. Returns String containing first name and age.");
        System.out.println(""); //blank line
    }

    public static void getUserInput()
    {
        String firstName = "";
        int userAge = 0;
        String myStr = "";
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter first name: ");
        firstName = sc.next();

        System.out.print("Enter age: ");
        userAge = sc.nextInt();

        System.out.println("");

        System.out.print("void method call: ");
        myVoidMethod(firstName, userAge);

        System.out.print("value-returning method call: ");
        myStr = myValueReturningMethod(firstName, userAge);

        System.out.println(myStr);
    }

    public static void myVoidMethod(String first, int age)
    {
        System.out.println(first + " is " + age);
        return;
    }

    public static String myValueReturningMethod(String first, int age)
    {
        return first + " is " + age;
    }
}
