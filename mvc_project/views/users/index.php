<h1>Users</h1>
<a href="index.php?action=createUser">Add User</a>
<table border="1">
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Username</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['userid']; ?></td>
        <td><?= htmlspecialchars($user['first_name']); ?></td>
        <td><?= htmlspecialchars($user['last_name']); ?></td>
        <td><?= htmlspecialchars($user['mail']); ?></td>
        <td><?= htmlspecialchars($user['username']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
