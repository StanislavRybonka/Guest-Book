<?php include ROOT.'/views/layouts/header.php'; ?>
    <table class="table-bordered table-striped table">
        <tr>
            <th>Имя</th>
            <th>Email</th>
            <th>Браузер-инфо</th>
            <th>Файл</th>
            <th>Дата</th>
        </tr>
        <?php foreach ($userDataArray as $userData): ?>
            <tr>
                <td><?php echo $userData['name']; ?></td>
                <td><?php echo $userData['email']; ?></td>
                <td><?php echo $userData['message']; ?></td>
                <td><?php echo $userData['browser_info']; ?></td>
                <td><?php echo $userData['comment_date']; ?></td>
            </tr>
        <?php endforeach; ?>

        <tr>


            <td colspan="4">Количество отзывов:</td>
            <td><?php echo $data; ?></td>

        </tr>

    </table>

<?php include ROOT.'/views/layouts/footer.php'; ?>