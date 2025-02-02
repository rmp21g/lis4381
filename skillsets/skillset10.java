import java.util.ArrayList;
import java.util.Scanner;

public class skillset10 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        ArrayList<String> animals = new ArrayList<>();

        System.out.println("Developer: Ryan Parks");

        System.out.println("");

        System.out.println("Program populates ArrayList of strings with user-entered animal type values.");
        
        System.out.println("Examples: Polar bear, Guinea pig, dog, cat, bird.");

        System.out.println("Program continues to collect user-entered values until user types 'n'.");

        System.out.println("Program displays ArrayList values after each iteration, as well as size.");

        System.out.println("");

        while (true) {
            System.out.print("Enter animal type: ");
            String animalType = scanner.nextLine();

            if (animalType.equalsIgnoreCase("n")) {
                break;
            }

            animals.add(animalType);

            System.out.println("ArrayList elements: " + animals);
            System.out.println("ArrayList Size = " + animals.size());
            
            System.out.println("");

            System.out.print("Continue? Enter y or n: ");
            String choice = scanner.nextLine();
            System.out.println("");

            if (choice.equalsIgnoreCase("n")) {
                break;
            }
        }

        scanner.close();
    }
}