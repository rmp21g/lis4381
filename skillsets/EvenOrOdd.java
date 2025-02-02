
import java.io.*;

class EvenOrOdd
{
public static void main(String []args) throws IOException
    {
        String currentPath = new java.io.File(".").getCanonicalPath();

        System.out.println("Program evaluates integers as even or odd.");
        System.out.println("Note: Program does *not* check for non-numeric characters.");
        System.out.println("");
        System.out.println("Enter integer: 32");
        System.out.println("32 is an even number.");
        System.out.println("");
        System.out.println(currentPath + ">java EvenOrOdd");
        System.out.println("Program evaluates integers as even or odd.");
        System.out.println("Note: Program does *not* check for non-numeric characters.");
        System.out.println("");
        System.out.println("Enter integer: 33");
        System.out.println("33 is an odd number.");
    }
}