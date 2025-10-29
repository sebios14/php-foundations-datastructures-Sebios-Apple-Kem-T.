<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Categories</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #c9e4ff, #f3f8ff);
      color: #333;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      padding: 40px;
    }

    .container {
      background-color: #fff;
      width: 500px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 25px 30px;
      transition: all 0.3s ease;
    }

    .container:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    h1 {
      text-align: center;
      color: #0074D9;
      font-weight: 600;
      margin-bottom: 20px;
    }

    strong {
      color: #0074D9;
      font-size: 18px;
      display: block;
      margin-top: 8px;
    }

    .book {
      margin-left: 20px;
      color: #555;
      font-size: 15px;
    }

    hr {
      margin: 20px 0;
      border: 0;
      border-top: 1px solid #eee;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Library Collection</h1>
    <hr>
    <?php
    $library = [
      "Fiction" => [
        "Fantasy" => ["Harry Potter", "The Hobbit"],
        "Mystery" => ["Sherlock Holmes", "Gone Girl"]
      ],
      "Non-Fiction" => [
        "Science" => ["A Brief History of Time", "The Selfish Gene"],
        "Biography" => ["Steve Jobs", "Becoming"]
      ]
    ];

    function displayLibrary($library, $indent = 0) {
        foreach ($library as $key => $value) {
            echo str_repeat("&nbsp;&nbsp;&nbsp;", $indent);
            if (is_array($value)) {
                echo "<strong>$key</strong>";
                displayLibrary($value, $indent + 1);
            } else {
                echo "<div class='book'>$value</div>";
            }
        }
    }

    displayLibrary($library);
    ?>
  </div>

</body>
</html>
