<div class="container">
    <div class="table">
        <thead>
            <tr>
                <th scope="col">Mitarbeiter</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($data['Mitglieder'] as $value){
                echo "<td>";
                echo "$value";
                echo "</td>";
            }?>
        </tr>
        </tbody>
    </div>
</div>
<?php
//echo $Mitglieder[0];
//echo $Mitglieder[1];
//echo '</div>';
//
?>
