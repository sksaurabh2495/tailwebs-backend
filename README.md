# tailwebs-backend (Respective Repo : tailwebs-frontend)

## To run the code , first put the repo inside your server(For linux it is inside var/www/html)

Also put the Backend repo on your server var/www/html (Backend repo- tailwebs-backend)

There is a file in this repo mysql_query, run those query to create database and tables into mysql database

## Now Go to the browser and to add a teacher hit this url : http://127.0.0.1/tailwebs-frontend/add_teacher.php

## Now with this teacher credentials you can visit the url : http://127.0.0.1/tailwebs-frontend/index.php and login with those teacher credentials

Now you are inside Teacher portal where you can manage student : Add, Edit, Delete






### Project Description

This project is a web-based teacher portal designed to manage student records efficiently. It is built using PHP for the backend, and HTML, CSS, and JavaScript for the frontend. The portal includes functionalities such as login authentication for teachers, displaying a list of students, and features for adding, editing, and deleting student records. 

### Project Components

1. **Login Functionality**:
   - **Login Screen**: The portal starts with a login screen where teachers enter their credentials.
   - **Authentication**: Upon submission, the credentials are verified against a database. If valid, the teacher is redirected to the home screen; otherwise, an error message is displayed.

2. **Teacher Portal Home & Student Listing Screen**:
   - **Home Screen**: After a successful login, the teacher is redirected to the home screen, which also serves as the student listing screen.
   - **Student Listing**: This screen displays a list of students, including their name, subject, and marks.
   - **Edit and Delete Options**: Each student record has options to edit or delete the details.
     - **Inline Editing**: Teachers can click an "Edit" button to open a modal with the student's current details prefilled. They can then update the information, which is saved to the database.
     - **Delete Functionality**: Teachers can delete student records, which removes them from the database.

3. **New Student Entry**:
   - **Add New Student**: There is an option to add a new student using a popup modal.
   - **Duplicate Check**: When adding a new student, the system checks if a student with the same name and subject already exists.
     - **Update Existing Record**: If a duplicate is found, the system updates the existing student's marks by adding the new marks to the current marks.
     - **Create New Record**: If no duplicate is found, a new student record is created in the database.

### Technology Stack

1. **Frontend**:
   - **HTML & CSS**: Basic structure and styling of the views.
   - **JavaScript**: Handles front-end logic, including form submissions, modal operations, and AJAX requests to the backend.

2. **Backend**:
   - **PHP**: Handles database connections, form submissions, data validation, and CRUD operations (Create, Read, Update, Delete).
   - **MySQL**: Database used to store teacher credentials and student records.

### Workflow

1. **Login Process**:
   - The teacher visits the login page and enters their credentials.
   - The form data is submitted to the server, where PHP validates the credentials against the MySQL database.
   - If valid, the teacher is redirected to the home screen; if not, an error is shown.

2. **Displaying Student List**:
   - The home screen fetches and displays a list of students from the database.
   - Each student entry has options for editing and deleting the record.

3. **Editing a Student**:
   - Clicking the "Edit" button opens a modal with the student’s current details prefilled.
   - The teacher can update the details and submit the form.
   - The updated data is sent to the server via AJAX, where PHP processes the update and saves it to the database.

4. **Adding a New Student**:
   - Clicking the "Add New Student" button opens a modal for entering new student details.
   - Upon submission, the data is checked for duplicates in the database.
   - If a duplicate is found, the existing record is updated; otherwise, a new record is created.

5. **Deleting a Student**:
   - Clicking the "Delete" button sends a request to the server to delete the student record from the database.

### Error Handling

- **Authentication Errors**: Invalid login credentials display appropriate error messages.
- **Form Validation**: Ensures all required fields are filled and data is in the correct format before submission.
- **Database Operations**: Catches and handles any database errors, providing feedback to the user.

### Conclusion

This project provides a comprehensive solution for managing student records in a teacher portal. It ensures secure login, efficient student management, and a user-friendly interface for teachers to manage their students' information.