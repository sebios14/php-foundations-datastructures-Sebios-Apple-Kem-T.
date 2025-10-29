Part I — Recursive Directory Display
This part is like organizing books inside folders and subfolders, just like how a computer shows files in directories.
You create a nested array where each category (like Fiction) contains smaller subcategories (like Fantasy, Mystery) 
and books inside them.You use a recursive function — which means the function calls itself — 
to go through every folder and print all categories and book titles, showing their hierarchy with indents (spaces).

How to run:
1.Save the code (Ctrl S)
2.Go to your Browser Search:(localhost/recursion.php)

Example Output:
Fiction   
   Fantasy
      Harry Potter
      The Hobbit
   
   Mystery
      Sherlock Holmes
      Gone GirlNon-Fiction
   
   Science
      A Brief History of Time
      The Selfish Gene
   
   Biography
      Steve Jobs
      Becoming

Part II — Hash Table for Book Details
This part stores specific information about each book (like author, year, and genre) using associative arrays — 
also called hash tables in programming.Each book title acts as a key, and its details (author, year, genre) are the values.
You make a function that searches for a book by its title and shows its details if found, or says “Book not found” if it doesn’t exist.

How to run:
1.Save the code (Ctrl S)
2.Go to your Browser Search:(localhost/hashtable.php)

Example Output:
Title: Harry Potter
Author: J.K. Rowling
Year: 1997
Genre: Fantasy

Part III — Binary Search Tree (BST) for Book Titles
This part organizes book titles in a Binary Search Tree (BST) — a data structure that helps find things fast.
Each node holds a book title, and every title smaller (alphabetically) goes to the left, while larger ones go to the right.

How to run:
1.Save the code (Ctrl S)
2.Go to your Browser Search:(localhost/bts.php)

Example Output:
Inorder Traversal (Alphabetical):
A Brief History of Time
Becoming
Gone Girl
Harry Potter
Sherlock Holmes
The Hobbit

Searching for "The Hobbit": Found!
Searching for "Inferno": Not Found.

Part IV — Integration Challenge 
This part combines everything into one full program:
-The recursive display shows all categories and books.
-When you select a book, the hash table shows its details.
-The binary search tree helps you quickly search for books in alphabetical order.
 

How to run:
1.Save the code (Ctrl S)
2.Go to your Browser Search:(localhost/main.php)

Example Output:
Fiction
   Fantasy
      Harry Potter
      The Hobbit
   Mystery
      Sherlock Holmes
      Gone Girl
Non-Fiction
   Science
      A Brief History of Time
      The Selfish Gene
   Biography
      Steve Jobs
      
Becoming
Book Details
Title: Harry Potter
Author: J.K. Rowling
Year: 1997
Genre: Fantasy

Inorder Traversal (Alphabetical Order)
A Brief History of Time
Becoming
Gone Girl
Harry Potter
Sherlock Holmes
The Hobbit

Searching for The Hobbit: Found!
Searching for Inferno: Not Found.

