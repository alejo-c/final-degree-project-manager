<article class="table-component">
    <h3 class="table-title"><?php echo $tableTitle ?></h3>
    <table class="table-content">
        <thead class="table-head">
            <tr class="table-head-row">
                <?php
                foreach ($headers as $header) {
                    echo "<th class='table-header'>$header</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody class="table-body">
            <?php
            foreach ($data as $row) {
                echo '<tr class="table-body-row">';
                foreach ($row as $column) {
                    echo "<td class='table-column'>$column</td>";
                }
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</article>