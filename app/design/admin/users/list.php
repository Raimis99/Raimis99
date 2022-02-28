<?php
/**
 * @var \Model\User $user ;
 */
?>
<form action="<?= $this->url("admin/editselectedusers") ?>" method="post">
    Pažymėtus:
    <select name="with_selected">
        <option value="activate">Aktyvuoti</option>
        <option value="deactivate">Deaktyvuoti</option>
    </select>
    <input type="submit" value="Vykdyti" name="submit"/>
    <table class="standart-table">
<tbody>
    <tr>
        <td>#</td>
        <th>Id</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php foreach ($this->data['users'] as $user): ?>
        <tr>
            <td><input type="checkbox" name="user_id[]" value="<?= $user->getId(); ?>"/></td>
            <td><?= $user->getId(); ?></td>
            <td><?= $user->getName(); ?></td>
            <td><?= $user->getLastName(); ?></td>
            <td><?= $user->getEmail(); ?></td>
            <td><?= $user->getPhone(); ?></td>
            <td><?= $user->isActive(); ?></td>
            <td>
                <a href="<?= $this->url('admin/useredit/', $user->getId()) ?>">Edit</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
</form>
</div>