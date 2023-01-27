public class Methods 
{
    public static void getRequirements()
    {
        System.out.println("\nDeveloper: Alex Gamez");
        System.out.println("Program loops through an array of strings");
        System.out.println("Use following values: dog, cat, bird, fish, insect.");
        System.out.println("Use following values: for, enhanced for, while, do...while.");
        System.out.println("\nNOTE: Pretest loops: for, enhanced for, while. Posttest loop: do...while.");
        System.out.println(); //blank line
    }

    public static void arrayLoops()
    {
        String animals[] = {"dog", "cat", "bird", "fish", "insect"};

        System.out.println("\nfor loop:");
        for(int i = 0; i < animals.length; i++)
        {
            System.out.println(animals[i]);
        }

        System.out.println("\nEnhanced for loop:");
        for(String test : animals)
        {
            System.out.println(test);
        }

        System.out.println("\nwhile loop:");
        int i = 0;
        while(i < animals.length)
        {
            System.out.println(animals[i]);
            i++;
        }

        i = 0; //reassign 0 to test variable...

        System.out.println("\ndo...while loop:");
        do
        {
            System.out.println((animals[i]));
            i++;
        }
        while(i < animals.length);

        System.out.println();

    }
    
}
