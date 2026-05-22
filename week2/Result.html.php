<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box success">
        <div class="result-label">Result</div>
        <div class="result-value">
            <?php echo htmlspecialchars($output, ENT_QUOTES, 'UTF-8'); ?>
        </div>
        <div class="result-detail">
            <?php echo htmlspecialchars($detail, ENT_QUOTES, 'UTF-8'); ?>
        </div>
        <a href="index.php" class="back-link">← Back to Calculator</a>
    </div>
</body>
</html>