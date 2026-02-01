<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Tracker</title>

    <body>
        <h1>Task Tracker</h1>
        <form action="tasks.php" method="post">
            
            <fieldset>

                <label for="task">Enter Task Title:</label>
                <input type="text" id="task" name="theTask" required>
                <button type = submit type="submit" value="Add Task"> Add Task </button>

                <label for="priorityLevel"> Enter Priority Level: </label>
                <select id="priority" name=thePriority>
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>

                <label for="timeLimit">Enter time to complete task: </label>
                <select id="time" name=theTime>
                    <option value="15">15 minutes</option>
                    <option value="30">30 minutes</option>
                    <option value="45">45 minutes</option>
                    <option value="60">60 minutes</option>
                </select>
                <button type = submit type="submit" value="Add Task"> Add Task </button>

            </fieldset>
        </form>
    </body>
</html>
