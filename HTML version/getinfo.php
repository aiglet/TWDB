

<html>
<head>
<title>Get Info</title>
</head>

<body>
<!-- Fill in this with better stuff later -->
<?php

function processISBNQuery() {
  $isbn = $_GET[isbn]
  $url = "https://www.googleapis.com/books/v1/volumes?q=" . $isbn
  header("Book Data: $url");
  exit;
} 
?>

</body>
</html

