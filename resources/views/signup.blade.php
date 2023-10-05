<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>/* Reset default margin and padding for all elements */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Apply some basic styles to the body */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    text-align: center;
    margin: 0;
    padding: 0;
}

/* Style the container */
.container {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: 50px auto;
}

/* Style headings */
h2 {
    color: #333;
    margin-bottom: 20px;
}

/* Style form groups */
.form-group {
    margin-bottom: 15px;
}

/* Style labels */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

/* Style input fields */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Style the submit button */
button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Change button color on hover */
button[type="submit"]:hover {
    background-color: #0056b3;
}
</style>

<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form method="post" action="/signup">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>
