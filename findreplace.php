<form action="index.php" method="POST">
    <label>Type your Text Here</label><br><br>
    <textarea name="textarea" cols="40" rows="10"></textarea><br><br>
    Search For Text<br>
    <input type="text" name="search"><br><br>
    Replace Text With<br>
    <input type="text" name="replace"><br><br>
    <input type="submit" value="Find and Replace">
</form>

<?php

if(isset($_POST['textarea']) && isset($_POST['search']) && isset($_POST['replace']))
{
    
     $text = $_POST['textarea'];
     $search = $_POST['search'];
    $replace = $_POST['replace'];
    $offset = NULL;
    $searchLength = strlen($search);
    
    if(!empty($text) && !empty($search) && !empty($replace)){
       
        while ($stringPostion = strpos($text, $search, $offset))
                {
                    
                    $offset = $stringPostion + $searchLength;
                    
                    $text = substr_replace($text, $replace, $stringPostion, $searchLength);
                }
                echo $text;
    }else{
        echo 'Please fill all the field';
    }
}

