public class Main
{
    public static void main(String[] args)
    {
        Methods.getRequirements();

        int arraySize = 0;
        arraySize = Methods.validateArraySize();

        Methods.calculateNumbers(arraySize);
    }
}
