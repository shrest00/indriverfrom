<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ideal Car Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="header">
    <img src="https://via.placeholder.com/50" alt="Car Finders Logo" class="logo">
    <h1>Your Ideal Car Profile</h1>
</header>

<div class="result" style="max-width:700px; margin:20px auto; background: rgba(255,255,255,0.05); padding:20px; border-radius:12px;">

    <p><strong>Customer Name:</strong> <?php echo htmlspecialchars($_GET['customerName'] ?? ''); ?></p>
    <p><strong>Customer Email:</strong> <?php echo htmlspecialchars($_GET['customerEmail'] ?? ''); ?></p>
    <p><strong>Manufacturer:</strong> <?php echo htmlspecialchars($_GET['manufacturer'] ?? ''); ?></p>
    <p><strong>Colour:</strong> <span style="background:<?php echo $_GET['colour'] ?? '#fff'; ?>; padding:2px 10px; border-radius:4px;"><?php echo $_GET['colour'] ?? ''; ?></span></p>

    <p><strong>Drive Options:</strong>
        <?php
        if(!empty($_GET['drive'])){
            echo implode(', ', $_GET['drive']);
        }
        ?>
    </p>

    <p><strong>License:</strong> <?php echo htmlspecialchars($_GET['license'] ?? ''); ?></p>
    <p><strong>Comments:</strong> <?php echo htmlspecialchars($_GET['comments'] ?? ''); ?></p>
    <p><strong>Fuel Type:</strong> <?php echo htmlspecialchars($_GET['fuel'] ?? ''); ?></p>
    <p><strong>Budget:</strong> $<?php echo htmlspecialchars($_GET['budget'] ?? ''); ?></p>

</div>

</body>
</html>
