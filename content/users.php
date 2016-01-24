<h4><i class="demo-icon fa fa-users" aria-hidden="true"></i>User Sessions</h4>
<?php
    /* Uses who to check which users are currently logged in, and from where. */
    $output = shell_exec('who');
    $table_rows = explode(PHP_EOL, $output);
    array_splice($table_rows, -1, 1); //remove empty last element
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
            <th><p class="text-center">Month</p></th>
            <th><p class="text-center">Day</p></th>
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
            for ($i = 0; $i<6; $i++) {
                $class = "";
                if (count($rowdata) == 5 && $i == 5) {
                    $col = "None";
                    $class .= "text-italic text-muted";
                } else {
                    $col = $rowdata[$i];
                }
                if ($i == 0) {
                    $class .= " text-left";
                }
                elseif ($i == 5) {
                    $class .= " text-right";
                }
                else {
                    $class .= " text-center";
                }
                echo "<td><p class='$class'>$col</p></td>";
            }
            echo "</tr>".PHP_EOL;
        }
        ?>
    </tbody>
</table>
