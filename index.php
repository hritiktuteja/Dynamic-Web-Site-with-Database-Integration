<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php">Add Content</a>
        <a href="view.php">View Content</a>
    </header>
    <h1>HTML FORM</h1>
        <div class="container">
            <form action="add.php" method="post">
                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter Your Name" required autocomplete="off">                 
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" required autocomplete="off">                 
                </div>
                <div>
                    <label>Student Id</label>
                    <input type="number" name="id" placeholder="Enter Your Student Id" required autocomplete="off">                 
                </div>
                <div>
                    <label>Grades</label>
                    <input type="number" name="grades" placeholder="Enter Your Grades" required autocomplete="off">                 
                </div>
                <div class="btn">
                    <button type="submit">Submit Data</button>
                </div>
            </form>
        </div>
        <footer>
            <p>2024. All rights reserved</p>
        </footer>
</body>
</html>