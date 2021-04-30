<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Html Git</title>
</head>
<body>
    <div style="display: flex; flex-direction: column; align-items: center;">
        <form method="get" action="index.php?raw_url=<?php if(isset($_GET['raw_url'])){echo $raw_url;} ?>" name="git">
            <input type="url" name="raw_url" placeholder="paste raw link" value="<?php if(isset($_GET['raw_url'])){echo $_GET['raw_url'];} ?>" required>
            <button type="submit">checar html</button>
            </form>
    </div>

    <?php

        require_once('src/scrapController.php');
        
        if(isset($_GET['raw_url'])){
            $scrap = new ScrapController($_GET['raw_url']);
        }

    ?>

    
    
</body>
</html>

<?php if(isset($_GET['raw_url'])){ ?>

<style>

form{
    position:fixed;
    bottom:15px;
    right:5px;
}

input,button{
    padding:5px;
    font-size:10px;
}
</style>

<?php }else{ ?>

<style>
    
    input,button{
        padding:5px;
        font-size:26px;
    }
</style>
<?php } ?>