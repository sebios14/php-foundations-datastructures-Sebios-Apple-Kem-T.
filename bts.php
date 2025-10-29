<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Binary Search Tree (BST) for Book Titles</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    h1, h2 {
      text-align: center;
      color: #2c3e50;
    }
    hr {
      border: 0;
      height: 2px;
      background-color: #3498db;
      margin: 20px 0;
    }
    .output {
      background-color: #f9f9f9;
      border-left: 5px solid #3498db;
      padding: 15px 20px;
      font-size: 16px;
      line-height: 1.5;
      border-radius: 6px;
    }
    .found { color: green; font-weight: bold; }
    .notfound { color: red; font-weight: bold; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Binary Search Tree (BST)</h1>
    <hr>

    <div class="output">
      <?php
      
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
        "The Hobbit"
      ];

      foreach ($books as $title) {
        $bst->insert($title);
      }

    
      echo "<h2>Inorder Traversal (Alphabetical Order):</h2>";
      $bst->inorderTraversal($bst->root);
      echo "<hr>";

      
      $searchTitles = ["The Hobbit", "Inferno"];
      foreach ($searchTitles as $title) {
        $found = $bst->search($title);
        if ($found) {
          echo "Searching for <em>\"$title\"</em>: <span class='found'>Found!</span><br>";
        } else {
          echo "Searching for <em>\"$title\"</em>: <span class='notfound'>Not Found.</span><br>";
        }
      }
      ?>
    </div>
  </div>
</body>
</html>
