<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Enter Employee Information</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <?php for ($i = 0; $i < 3; $i++): ?>
            Enter employee id:
            <input type="text" name="empid[]"><br>
            Enter Job Title:
            <input type="text" name="job[]"><br>
            Years of experience:
            <input type="text" name="experience[]"><br><br>
        <?php endfor; ?>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $empid = $_POST["empid"];
        $job = $_POST["job"];
        $experience = $_POST["experience"];

        // Create an array of employees
        $employees = [];
        for ($i = 0; $i < count($empid); $i++) {
            if (!empty($empid[$i]) && !empty($job[$i]) && !empty($experience[$i])) {
                $employees[] = [
                    'id' => $empid[$i],
                    'job_title' => $job[$i],
                    'years_of_experience' => intval($experience[$i])
                ];
            }
        }

        // Sort employees by years of experience in ascending order
        usort($employees, function($a, $b) {
            return $a['years_of_experience'] - $b['years_of_experience'];
        });

        // Display the sorted employee data
        if (!empty($employees)) {
            echo "<h2>Employee Information (Sorted by Years of Experience)</h2>";
            echo "<table>";
            echo "<tr><th>Employee ID</th><th>Job Title</th><th>Years of Experience</th></tr>";
            foreach ($employees as $employee) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($employee['id']) . "</td>";
                echo "<td>" . htmlspecialchars($employee['job_title']) . "</td>";
                echo "<td>" . htmlspecialchars($employee['years_of_experience']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No valid employee data submitted.</p>";
        }
    }
    ?>
</body>
</html>