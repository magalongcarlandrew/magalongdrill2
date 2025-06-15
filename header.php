<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        header {
            background-color: #000;
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 15px;
            border: 1px solid #fff;
            border-radius: 5px;
            margin: 0 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        nav a:hover {
            background-color: #fff;
            color: #000;
        }
        main {
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer { /* This CSS rule is present but the HTML footer element is removed */
            text-align: center;
            padding: 1em 0;
            background-color: #e0e0e0;
            color: #555;
            margin-top: 20px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Simple PHP Project</h1>
        <nav>
            <a href="template.php">Template Page</a> |
            <a href="quiz.php">Quiz Program</a>
        </nav>
    </header>
    <main>
