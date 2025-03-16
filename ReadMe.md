# Contact Manager and Regex Practice Repository

This repository contains two projects designed to practice and demonstrate the concepts of **JSON** (JavaScript Object Notation) and **RegEx** (Regular Expressions) in PHP. These projects focus on handling data, validating inputs, and working with file storage in a practical way.

## Project 1: Contact Manager

### Overview
The **Contact Manager** is a simple PHP web application that allows users to manage a list of contacts. It provides functionality to add new contacts, validate their details using regex, and store them in a JSON file. Additionally, it includes a search feature to find contacts by partial name matches.

### Features
1. **Add New Contact**:
   - Users can input a contact’s name, email, and phone number through a web form.
   - The data is validated using regex patterns to ensure correctness before saving.
   - Validated contacts are stored in a `contacts.json` file in JSON format.

2. **Data Validation with Regex**:
   - **Name**: Must be at least 3 characters long and contain only letters and spaces (e.g., "Menna Baligh").
     - Regex: `/^[a-zA-Z\s]{3,}$/`
   - **Email**: Must follow a basic email format (e.g., "user@domain.com").
     - Regex: `/^\w+@\w+\.\w{2,}$/`
   - **Phone**: Must be exactly 11 digits (e.g., "01234567890").
     - Regex: `/^\d{11}$/`
   - If any field fails validation, error messages are displayed to the user.

3. **Store Contacts in JSON**:
   - Contacts are saved in a `contacts.json` file as an array of objects.

4. **Search Functionality**:
   - Users can search for contacts by entering a partial name

5. **User Feedback**:
   - Success messages appear when a contact is added (e.g., "Contact added successfully").
   - Error messages show up if validation fails (e.g., "Email is not valid").

### Files
- **`index.php`**: The main page of the application. It includes:
  - A search form for finding contacts by name.
  - An add contact form for submitting new contact details.
- **`add.php`**: Handles the submission of the add contact form:
  - Validates input data (name, email, phone) using regex.
  - Saves validated contacts to `contacts.json` in JSON format.
  - Sets session messages for success or errors.
- **`search.php`**: Processes search requests:
  - Takes the search term from the search form.
  - Uses regex to filter contacts from `contacts.json` based on partial name matches.
  - Stores results in a session variable and redirects to `searchresult.php`.
- **`searchresult.php`**: Displays the results of the search process:
  - Reads search results from the session variable set by `search.php`.
  - Shows matching contacts in a styled format (e.g., cards or table).
  - Displays a "No results found" message if no matches exist.
- **`errors.php`**: Displays validation error messages:
  - Shows errors stored in the session (e.g., "Email is not valid") after form submission fails.
- **`success.php`**: Shows success messages:
  - Displays confirmation messages (e.g., "Contact added successfully") when a contact is saved.
- **`contacts.json`**: The JSON file where contacts are stored:
  - Holds an array of contact objects with fields `name`, `email`, and `phone`.
  - Updated whenever a new contact is added via `add.php`.