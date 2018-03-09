<html>
    <head>
        <link href="search.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>@<?php echo " ". $items['user'].""; ?></title>
    </head>
    <div id="search-page">
    <form action="/twitter/search.php" method="GET">
            <input type="text" 
                   name="user" 
                   required="required" 
                   class="search-bar" 
                   maxlength="15"
                   title="enter twitter username"
                   placeholder="@handle"
                   onfocus="this.placeholder = ''"
                   onblur="this.placeholder = '@handle'" />       
            <input type="submit" value="Search" class="search-submit"/>
        </form>
        </div>
    <main>     
           <?php include 'twtr.php';?>       
    </main>   
</html>