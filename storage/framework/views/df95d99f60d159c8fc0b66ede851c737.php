<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
<section>
    <?php
        if(DB::connection()->getPdo()){
            echo "WE GOT IT, DB NAME IS";
        }
    ?>
</section>
</body>
</html><?php /**PATH C:\Users\Kuba\example-app\resources\views/dbconn.blade.php ENDPATH**/ ?>