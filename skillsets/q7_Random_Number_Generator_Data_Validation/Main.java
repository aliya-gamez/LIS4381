public class Main
{
    public static void main(String[] args)
    {
        Methods.getRequirements();
        
        int [] userArray = Methods.createArray(); //set userArray
        Methods.generatePsudoRandomNumbers(userArray); //pass array
    }
}