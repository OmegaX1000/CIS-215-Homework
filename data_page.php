<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body style="padding: 20px; ">
        <?php
            require('../dbconfig.php');

            $db = connectDB();
            $Results = $db->prepare('SELECT * FROM FormData;');
            $Results->execute();

            printf("<table style=\"border:1px solid black;\">");
            printf(
                "<tr style=\"border:1px solid black;\">
                    <th style=\"border:1px solid black; padding: 20px;\">Id</th>
                    <th style=\"border:1px solid black; padding: 20px;\">Age</th>
                    <th style=\"border:1px solid black; padding: 20px;\">Gender</th>
                    <th style=\"border:1px solid black; padding: 20px;\">PHP Feature Request</th>
                    <th style=\"border:1px solid black; padding: 20px;\">RHP Rating</th>
                </tr>"
            );

            while($row = $Results->fetch()) 
            {
                $Range = "";

                switch ($row["Age"])
                {
                    case 1: $Range = "0-12"; break;
                    case 2: $Range = "13-17"; break;
                    case 3: $Range = "18-22"; break;
                    case 4: $Range = "23-27"; break;
                    case 5: $Range = "28-32"; break;
                    case 6: $Range = "33-37"; break;
                    case 7: $Range = "38-42"; break;
                    case 8: $Range = "43-47"; break;
                    case 9: $Range = "48-52"; break;
                    case 10: $Range = "53-57"; break;
                    case 11: $Range = "58-62"; break;
                    case 12: $Range = "63-67"; break;
                    case 13: $Range = "68+"; break;
                    default: $Range = "Error"; break;
                }

                printf(
                    "<tr style=\"border:1px solid black;\">
                        <td style=\"border:1px solid black;\">%s</td>
                        <td style=\"border:1px solid black;\">%s</td>
                        <td style=\"border:1px solid black;\">%s</td>
                        <td style=\"border:1px solid black;\">%s</td>
                        <td style=\"border:1px solid black;\">%s</td>
                    </tr>",
                $row["id"], $Range, $row["Gender"], $row["FeatRequest"], $row["Rating"]
                );
            }

            printf("</table>");

            /* output data of each row
            while($row = $Results->fetch()) 
            {
                echo "id: " . $row["id"]. " - Email: " . $row["Email"]. " " . $row["Passwd"]. "<br>";
            } */      
        ?>
    </body>
</html>