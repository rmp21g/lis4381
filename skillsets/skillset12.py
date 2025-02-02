def temperature_conversion():
    print("Temperature Conversion Program")
    print("Developer: Ryan Parks")
    print()
    print("Program converts user-entered temperatures into Fahrenheit or Celsius scales.")
    print("Program continues to prompt for user entry until no longer requested.")
    print("Note: upper or lower case letters permitted. Though, incorrect entries are not permitted.")
    print("Note: Program does not validate numeric data (optional requirement).")
    print()

    while True:
        # First prompt for conversion choice
        conversion_choice = input("Fahrenheit to Celsius? Type \"f\", or Celsius to Fahrenheit? Type \"c\": ").strip().lower()
        
        # Validate conversion choice
        if conversion_choice not in ('f', 'c'):
            print("Incorrect entry. Please try again.")
            print()
            continue  # Loop back to ask for conversion choice again

        # Prompt for temperature based on the conversion choice
        if conversion_choice == 'f':
            temp_fahrenheit = float(input("Enter temperature in Fahrenheit: "))
            temp_celsius = (temp_fahrenheit - 32) * 5/9
            print(f"Temperature in Celsius = {temp_celsius:.1f}")
        elif conversion_choice == 'c':
            temp_celsius = float(input("Enter temperature in Celsius: "))
            temp_fahrenheit = (temp_celsius * 9/5) + 32
            print(f"Temperature in Fahrenheit = {temp_fahrenheit:.1f}")
        
        print()  # Blank line after temperature output
        
        # Ask if the user wants to convert another temperature
        continue_choice = input("Do you want to convert a temperature (y or n)? ").strip().lower()
        if continue_choice == 'n':
            break
        elif continue_choice != 'y':
            print("Incorrect entry. Please try again.")
            print()

    print()
    print("Thank you for using our Temperature Conversion Program!")

# Run the program
temperature_conversion()
