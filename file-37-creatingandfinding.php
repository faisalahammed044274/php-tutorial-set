<?php

$result = '';  // Added to store the output

if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])) {
    $text = $_POST['text'];
    $searchfor = $_POST['searchfor'];
    $replacewith = $_POST['replacewith'];
    
    // Sanitize inputs
    $text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $searchfor = htmlspecialchars($searchfor, ENT_QUOTES, 'UTF-8');
    $replacewith = htmlspecialchars($replacewith, ENT_QUOTES, 'UTF-8');
    
    $search_length = strlen($searchfor);
    $offset = 0;

    if(!empty($text) && !empty($searchfor) && !empty($replacewith)) {
        while(($strpos = strpos($text, $searchfor, $offset)) !== false) {
            $text = substr_replace($text, $replacewith, $strpos, $search_length);
            $offset = $strpos + strlen($replacewith); // Use length of replacement string instead
            
            // Prevent infinite loop and offset overflow
            if($offset >= strlen($text) || strpos($replacewith, $searchfor) !== false) {
                break;
            }
        }
        $result = $text;
    } else {
        $result = 'Please fill in all fields.';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Find and Replace</title>
</head>
<body>
    <form action="" method="POST">
        <textarea name="text" rows="6" cols="30"><?php echo isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''; ?></textarea> <br><br>
        <label for="searchfor">Search for:</label><br>
        <input type="text" name="searchfor" value="<?php echo isset($_POST['searchfor']) ? htmlspecialchars($_POST['searchfor']) : ''; ?>"> <br><br>
        <label for="replacewith">Replace with:</label><br>
        <input type="text" name="replacewith" value="<?php echo isset($_POST['replacewith']) ? htmlspecialchars($_POST['replacewith']) : ''; ?>"> <br><br>
        <input type="submit" value="Find and Replace">
    </form>
    
    <?php if(!empty($result)): ?>
        <h3>Result:</h3>
        <pre><?php echo $result; ?></pre>
    <?php endif; ?>
</body>
</html>