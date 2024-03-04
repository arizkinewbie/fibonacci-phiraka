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
        <p>Rows <input type="number" name="rows" required></p>
        <p>Columns <input type="number" name="columns" required></p>
        <button type="submit">Submit</button>
    </form>
    <br /><br />
    <div id="fibonacci-table">
    </div>
</body>

</html>