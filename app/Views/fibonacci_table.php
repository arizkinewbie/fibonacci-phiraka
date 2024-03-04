<div id="show table" rows="<?= $rows ?>" columns="<?= $columns ?>">
    <?php if (isset($sequence)) : ?>
        <table>
            <?php for ($i = 0; $i < $rows; $i++) : ?>
                <tr>
                    <?php for ($j = 0; $j < $columns; $j++) : ?>
                        <td><?= $sequence[$i * $columns + $j] ?? '' ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>
</div>