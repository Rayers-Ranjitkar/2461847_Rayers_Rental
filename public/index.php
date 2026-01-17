<?php 




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Property</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
    <h1>Add Property</h1>
    <a href="index.html" class="btn">Back</a>
</header>

<form id="property-form" class="form">
    <input type="text" name="title" placeholder="Property Title" required>
    <input type="text" name="location" placeholder="Location" required>
    <input type="number" name="price" placeholder="Price per month" required>
    <textarea name="description" placeholder="Description"></textarea>
    <input type="file" name="image">
    <button type="submit">Save Property</button>
</form>

<script src="script.js"></script>
</body>
</html>
