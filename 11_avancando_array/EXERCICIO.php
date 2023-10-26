<?php

    $pessoa = [
        'isac' => 17,
        'joao' => 3,
        'helane' => 27,
        'elayne' => 29
    ];
    
?>

<table border = '1';>
    <th>nome</th>
    <th>idade</th>
    <?php foreach($pessoa as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>    
</table>
