<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="base-url" content="<?= base_url(); ?>">
    <title>Fibonacci - Phiraka Test</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>" type="text/css" />
    <script src="<?= base_url('js/scripts.js') ?>"></script>
</head>

<body>
    <h1>Fibonacci - Phiraka Test</h1>
    <form id="fibonacci-form">
        <p>
            <label for="rows" style="margin-right: 50px;">Rows</label>
            <input type="number" name="rows" id="rows" required>
        </p>
        <p>
            <label for="columns" style="margin-right: 26px;">Columns</label>
            <input type="number" name="columns" id="columns" required>
        </p>
        <button type="submit" style="margin-right: 30px;">Submit</button>
    </form>
    <div id="fibonacci-table" style="margin-top: 20px;">
</body>

</html>