<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Information</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #dbeafe, #f9fafb);
      color: #333;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      padding: 40px;
    }

    .container {
      background: #fff;
      padding: 30px;
      border-radius: 16px;
      width: 480px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .container:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    h1 {
      text-align: center;
      color: #2563eb;
      margin-bottom: 20px;
    }

    .book-card {
      background: #f3f8ff;
      border-left: 6px solid #2563eb;
      padding: 20px;
      border-radius: 10px;
      font-size: 16px;
      line-height: 1.8;
      color: #444;
    }

    strong {
      color: #2563eb;
    }

    .not-found {
      color: #e11d48;
      background: #fee2e2;
      padding: 12px;
      border-radius: 8px;
      text-align: center;
      font-weight: 500;
    }

    hr {
      border: 0;
      border-top: 1px solid #e5e7eb;
      margin: 20px 0;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Book Information</h1>
    <hr>
    <div class="book-card">
      <?php
      $bookInfo = [
          "Harry Potter" => [
              "author" => "J.K. Rowling",
              "year" => 1997,
              "genre" => "Fantasy"
          ],
          "The Hobbit" => [
              "author" => "J.R.R. Tolkien",
              "year" => 1937,
              "genre" => "Fantasy"
          ],
          "Sherlock Holmes" => [
              "author" => "Arthur Conan Doyle",
              "year" => 1892,
              "genre" => "Mystery"
          ],
          "Gone Girl" => [
              "author" => "Gillian Flynn",
              "year" => 2012,
              "genre" => "Mystery"
          ],
          "A Brief History of Time" => [
              "author" => "Stephen Hawking",
              "year" => 1988,
              "genre" => "Science"
          ],
          "The Selfish Gene" => [
              "author" => "Richard Dawkins",
              "year" => 1976,
              "genre" => "Science"
          ],
          "Steve Jobs" => [
              "author" => "Walter Isaacson",
              "year" => 2011,
              "genre" => "Biography"
          ],
          "Becoming" => [
              "author" => "Michelle Obama",
              "year" => 2018,
              "genre" => "Biography"
          ]
      ];

      function getBookInfo($title, $bookInfo) {
          if (array_key_exists($title, $bookInfo)) {
              $info = $bookInfo[$title];
              echo "<strong>Title:</strong> $title<br>";
              echo "<strong>Author:</strong> {$info['author']}<br>";
              echo "<strong>Year:</strong> {$info['year']}<br>";
              echo "<strong>Genre:</strong> {$info['genre']}<br>";
          } else {
              echo "<div class='not-found'>Book not found.</div>";
          }
      }
      getBookInfo("Harry Potter", $bookInfo);
      ?>
    </div>
  </div>

</body>
</html>
