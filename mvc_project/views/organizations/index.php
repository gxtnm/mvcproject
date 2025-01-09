<h1>Organizations</h1>
<a href="index.php?action=createOrganization">Add Organization</a>
<table border="1">
    <tr>
        <th>Org ID</th>
        <th>Org Name</th>
        <th>TIN</th>
        <th>Contact Person</th>
        <th>Contact Number</th>
        <th>Address</th>
    </tr>
    <?php foreach ($organizations as $org): ?>
    <tr>
        <td><?= $org['orgId']; ?></td>
        <td><?= htmlspecialchars($org['orgName']); ?></td>
        <td><?= htmlspecialchars($org['tin']); ?></td>
        <td><?= htmlspecialchars($org['contactPerson']); ?></td>
        <td><?= htmlspecialchars($org['contactNumber']); ?></td>
        <td><?= htmlspecialchars($org['address']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
