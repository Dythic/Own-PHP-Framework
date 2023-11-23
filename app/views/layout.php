<!-- layout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Titre par défaut' ?></title>
    <!-- Autres balises head communes -->
</head>
<body>
    <!-- Contenu de la vue sera inséré ici -->
    <?= isset($content) ? $content : '' ?>
</body>
</html>
