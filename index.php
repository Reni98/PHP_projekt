<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/index.css">
    <title>Upload New Tickets</title>
</head>

<body>
    <div class="container">
    <h1>Upload your memory</h1>
    <form action="db.php" method="post" class="form-control" enctype="multipart/form-data">
    <label for="image">Image File:</label>
    <input type="file" class="form-control" name="image" id="image" required>
    <br>
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>
    <br>
    <div class="btn_design">
    <button type="submit" class="insert" name="insert">Upload</button>
    </div>
    
</form>

    </div>
    </div>
</body>
</html>