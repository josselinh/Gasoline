<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->title_for_layout; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Layout</h1>
        <div><?php require_once $view; ?></div>
    </body>
</html>
