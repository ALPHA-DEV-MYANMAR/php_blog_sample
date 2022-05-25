<table class="table table-hover align-middle">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>User</th>
        <th>Created</th>
        <th>Controls</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach( categories() as $c ){
        ?>
        <tr>
            <td><?php echo $c['id']; ?></td>
            <td><?php echo $c['title']; ?></td>
            <td><?php echo user($c['user_id'])['name']  ?></td>
            <td><?php echo showTime($c['created_at'],'D-m-y'); ?></td>
            <td>
                <a href="category_edit.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-warning btn-sm">
                    <i class="feather-edit fa-fw"></i>
                </a>
                <a href="category_delete.php?id=<?php echo $c['id']; ?>" class="btn btn-outline-danger btn-sm">
                    <i class="feather-trash fa-fw"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
