<html>
    <head>
        <link rel="stylesheet" href="./../Styling/window.css">
    </head>
    <body>
        <div class="window">
            <h1>Add Task</h1>
            <form action="./../Process/add-task-process.php" method="POST">
                <label for="">Task Name</label>
                <br>
                <input type="text" name='judul' required>
                <br>
                <label for="">Task Description</label>
                <br>
                <input type="text" name='desc'>
                <br>
                <label for="">Due Date</label>
                <br>
                <input type="date" name='due' required>
                <br>
                <button type="submit">Add</button>
            </form>
        </div>
    </body>
</html>