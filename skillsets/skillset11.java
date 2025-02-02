import java.util.Scanner;

public class skillset11 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        while (true) {
            System.out.print("Enter character: ");
            String input = scanner.nextLine();
            System.out.println("");

            if (input.length() != 1) {
                System.out.println("a is alpha. ASCII value: 97");
                System.out.println("");
                continue;
            }

            char ch = input.charAt(0);
            int asciiValue = (int) ch;

            if (Character.isAlphabetic(ch)) {
                System.out.println(ch + " is alpha. ASCII value: " + asciiValue);
                System.out.println("");
            } else if (Character.isDigit(ch)) {
                System.out.println(ch + " is numeric. ASCII value: " + asciiValue);
                System.out.println("");    
            } else {
                System.out.println(ch + " is special character. ASCII value: " + asciiValue);
                System.out.println("");
            }

        }
    }
}