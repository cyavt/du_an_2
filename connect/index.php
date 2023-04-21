<?php
include_once("./config.php");
?>
<table border="1">
    <thead>
        <tr>
            <th>Token</th>
            <th>Vị trí</th>
            <th>Nhịp tim</th>
            <th>Trạng thái</th>
            <th>Dung lượng pin</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = mysqli_query($connect, "SELECT * FROM `lifebuoy_in`");
        foreach ($result as $row) :
        ?>
            <tr>
                <td><?= $row['token']; ?></td>
                <td><a href="https://www.google.com/maps/place/<?= $row['location']; ?>" target="_blank"><?= $row['location']; ?></a></td>
                <td><?= $row['heart_rate']; ?></td>
                <td><?= $row['water_state']; ?> = <?=($row['water_state']==0)? 'Chưa hoạt động':'hoạt động';?></td>
                <td><small><?= $row['bat_cap']; ?>%</small></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>