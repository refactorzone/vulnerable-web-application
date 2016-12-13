<?php
/**
 * Warning! This code was written to be broken ON PURPOSE! Every single piece of it is bad quality ON PURPOSE! DON'T
 * EVER USE THIS FOR ANYTHING! PLEASE!
 */

require(__DIR__ . '/includes/loggedin-header.php');

$sql = '
  SELECT
    domains.name AS domain_name,
    domains.expires AS domain_expires,
    users.id AS user_id,
    users.username AS username
  FROM
    domains
    INNER JOIN users ON users.id=domains.user_id
';
if (!$_SESSION['admin']) {
    $sql .= ' WHERE users.username="' . $_SESSION['user'] . '"';
}
$domainResult = $db->query($sql);
$domains = [];
while ($row = $domainResult->fetch_assoc()) {
    $domains[] = $row;
}

?>
<h2 class="text-muted">Hello, <?=$_SESSION['user']?></h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Domain</th>
            <?php if ($_SESSION['admin']) : ?><th>Owner</th><?php endif; ?>
            <th>Renewal</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
    <?php if (empty($domains)) :?>
        <tr>
            <td colspan="3">No domains found.</td>
        </tr>
    <?php else :?>
        <?php foreach($domains as $domain) :?>
            <tr>
                <td>
                    <?=$domain['domain_name']?>
                </td>
                <?php if ($_SESSION['admin']) : ?><td><?=$domain['username']?></td><?php endif; ?>
                <td>
                    <?=$domain['domain_expires']?>
                </td>
                <td>
                    $ 12.99
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
    <tfoot>
        <tr>
           <td colspan="3" class="text-right">
               <a href="adddomain.php" class="btn btn-success"><i class="fa fa-plus"></i> Add domain</a>
           </td>
        </tr>
    </tfoot>
</table>
<?php
require(__DIR__ . '/includes/loggedin-footer.php');
?>
