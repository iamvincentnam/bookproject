# bookproject
Inspired by my likeness for African Literatures, I  developed a  book catalogue project. 
This   BookProject App Documentation is a PHP and MySQL-based web application that serves as a book catalog. 
It allows users to view a list of available books and provides detailed information about each book when selected. 
The BookProject app is a web application built with PHP and MySQL. 
It serves as a book catalog, allowing users to browse and explore a collection of books.
The app consists of multiple interconnected files that work together to provide the desired functionality.\


Book Listing: 
The main page of the app, index.php, displays a table with information about available books. 
The book data is fetched from a MySQL database using the SELECT query.


Book Selection:
Users can click on a book row to view detailed information about a specific book. 
When a row is clicked, the each_book_info.php file is loaded. 
The selected book's ID is passed as a query parameter (book_id), and the relevant book details are fetched from the database using another SELECT query.


Book Details:
On the book details page, users can see the book's cover image, title, author, genre, and summary. 
The book information is dynamically populated based on the selected book's data retrieved from the database.
