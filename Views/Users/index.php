<table border="1">
    <thead>
        <tr>
            <th>Login</th>
            <th>Email</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($this->users as $user): ?>
        <tr>
            <td><?php echo $user->getLogin(); ?></td>
            <td><?php echo $user->getEmail(); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>