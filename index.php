<html>
<link href="main.css" rel="stylesheet">
    <title>Twitter Search</title>
    <main id="search-page">
        <!--<img src="logo.svg" class="logo"/>-->
        <form action="http://my-low.com/twitter/search.php" method="GET">
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
    </main> 
</html>