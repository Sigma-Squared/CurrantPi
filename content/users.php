<h4>User Sessions</h4>
<?php
    /* Uses who to check which users are currently logged in, and from where. */
    $output = shell_exec('who');
    $table_rows = explode('\n', $output);
?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>
                <p>Name</p>
            </th>
            <th>
                <p class="text-center">Line</p>
            </th>
            <th>
                <p class="text-center">Time</p>
            </th>
            <th>
                <p class="text-right">Comment</p>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($table_rows as $row) {
            echo "<tr>";
            $rowdata = preg_split('/\s+/', $row);
            foreach ($rowdata as $col) {
                echo "<td>";
                echo $col;
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>