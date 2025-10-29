<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Library System</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f6f8;
      color: #333;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #0077cc;
      color: white;
      text-align: center;
      padding: 20px 0;
      font-size: 24px;
      letter-spacing: 1px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }
    main {
      max-width: 900px;
      margin: 30px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    h2, h3 {
      color: #0077cc;
      border-bottom: 2px solid #0077cc;
      padding-bottom: 5px;
    }
    strong {
      color: #444;
    }
    hr {
      border: none;
      border-top: 1px solid #ddd;
      margin: 25px 0;
    }
    .category {
      margin-left: 20px;
      padding-left: 10px;
      border-left: 3px solid #0077cc;
    }
    .book-list {
      margin-left: 40px;
      color: #555;
    }
    .book-info {
      background: #f9fbfc;
      border-left: 4px solid #0077cc;
      padding: 15px;
      margin: 10px 0;
      border-radius: 8px;
    }
    .search-result {
      background: #eef6ff;
      padding: 10px;
      border-radius: 6px;
      margin-top: 10px;
    }
    footer {
      text-align: center;
      padding: 15px;
      background: #0077cc;
      color: white;
      margin-top: 40px;
      font-size: 14px;
    }
  </style>
</head>
<body>

<header>Book Library System</header>

<main>
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
            echo "<div class='category'><strong>$key</strong><br>";
            displayLibrary($value, $indent + 1);
            echo "</div>";
        } else {
            echo "<div class='book-list'>$value</div>";
        }
    }
}
echo "<h2>Library Categories</h2>";
displayLibrary($library);

echo "<hr>";

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
        echo "<div class='book-info'>";
        echo "<h3>Book Details</h3>";
        echo "<strong>Title:</strong> $title<br>";
        echo "<strong>Author:</strong> {$info['author']}<br>";
        echo "<strong>Year:</strong> {$info['year']}<br>";
        echo "<strong>Genre:</strong> {$info['genre']}<br>";
        echo "</div>";
    } else {
        echo "<p style='color:red;'>Book not found.</p>";
    }
}
getBookInfo("Harry Potter", $bookInfo);

echo "<hr>";

class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinarySearchTree {
    public $root;

    public function __construct() {
        $this->root = null;
    }
    public function insert($data) {
        $newNode = new Node($data);
        if ($this->root === null) {
            $this->root = $newNode;
        } else {
            $this->insertNode($this->root, $newNode);
        }
    }
    private function insertNode($node, $newNode) {
        if (strcasecmp($newNode->data, $node->data) < 0) {
            if ($node->left === null) {
                $node->left = $newNode;
            } else {
                $this->insertNode($node->left, $newNode);
            }
        } else {
            if ($node->right === null) {
                $node->right = $newNode;
            } else {
                $this->insertNode($node->right, $newNode);
            }
        }
    }
    public function search($data) {
        return $this->searchNode($this->root, $data);
    }

    private function searchNode($node, $data) {
        if ($node === null) {
            return false;
        }
        if (strcasecmp($data, $node->data) === 0) {
            return true;
        } elseif (strcasecmp($data, $node->data) < 0) {
            return $this->searchNode($node->left, $data);
        } else {
            return $this->searchNode($node->right, $data);
        }
    }
    public function inorderTraversal($node) {
        if ($node !== null) {
            $this->inorderTraversal($node->left);
            echo $node->data . "<br>";
            $this->inorderTraversal($node->right);
        }
    }
}

$bst = new BinarySearchTree();
$books = [
    "A Brief History of Time",
    "Becoming",
    "Gone Girl",
    "Harry Potter",
    "Sherlock Holmes",
    "The Hobbit",
];

foreach ($books as $title) {
    $bst->insert($title);
}

echo "<h2>Inorder Traversal (Alphabetical Order)</h2>";
echo "<div class='book-list'>";
$bst->inorderTraversal($bst->root);
echo "</div>";

echo "<br>";

$searchTitles = ["The Hobbit", "Inferno"];
foreach ($searchTitles as $title) {
    $found = $bst->search($title);
    echo "<div class='search-result'>";
    if ($found) {
        echo "Searching for <strong>$title</strong>: <span style='color:green;'>Found!</span><br>";
    } else {
        echo "Searching for <strong>$title</strong>: <span style='color:red;'>Not Found.</span><br>";
    }
    echo "</div>";
}
?>
</main>

<footer>
  &copy; <?php echo date(""); ?> Library System 
</footer>

</body>
</html>
