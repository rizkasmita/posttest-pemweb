<?php
    // var_dump($_POST)
    require 'header.php';
    $form = [
        'Name'=> $_POST['name'],
        'Email' => $_POST['email'],
        'Message' => $_POST['message']
    ];
?>

<div class="table-contact" style="display:grid; align-items:center; height:100vh; width:80%; margin:0 auto">
    <table border="1" cellspacing=0>
        <thead style="background-color: grey;">
            <th colspan=2>hasil</th>
        </thead>
        <?php foreach ($form as $key => $value): ?>
            <tr>
                <td style="padding: 10px;"><?= $key; ?></td>
                <td style="padding: 10px;"><?= $value; ?></td>
            </tr>
        <?php endforeach; ?>
        <tfoot>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <a href="index.php" style="color: var(--text-color)">back</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<?php require 'footer.php' ?>