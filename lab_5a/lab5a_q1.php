<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>

    <?php
        $name = "Nur Ariffin Mohd Zin";
        $matricNo = "AI240004";
        $course = "Bachelor of Information Technology";
        $year = "Year 3";
        $address = "Parit Raja UTHM";
    ?>

    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>

        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNo; ?></td>
        </tr>

        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>

        <tr>
            <td>Year of Study</td>
            <td><?php echo $year; ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>

</body>
</html>