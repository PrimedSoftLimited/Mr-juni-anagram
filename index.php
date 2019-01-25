
<!DOCTYPE html>
<html>
<head>
    <title>Palindrome</title>
</head>
<body>
    <form style="width: 50%; margin: auto;" action="" method="get" >
        <input type="text" name="word_1">
        <input type="text" name="word_2">
        <input type="submit" name="submit">
    </form>

</body>
</html>



<?php    
if(isset($_GET['submit'])) {
    function check_anagram($string_1, $string_2) 
    { 

        if (empty($string_1) || empty($string_2)) {
            echo "please insert a word to check";
            die();
        }else{
            if (count_chars($string_1, 1) == count_chars($string_2, 1)) {
            return 'Anagram------yes'; 
            }else{
            return 'Anamgram-----no'; 
            }
        }      
    } 
  
    // check function

    $word_1 = $_GET['word_1'];
    $word_2 = $_GET['word_2'];
    print_r(check_anagram($word_1, $word_2)."\n"); 
}else{
    echo "insert a word to check";
}
?> 