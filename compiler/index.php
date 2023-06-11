<?php
// An array of questions and their expected answers
$questions = array(
    array(
        'question' => 'O`lchami x bo`lgan kubik berilgan uni hajmini toping.<br><br>
        Kiruvchi ma’lumotlar:<br>
         bitta butun son x  1<= x >=100 <br><br>
         Chiquvchi ma’lumotlar: <br>
        bitta butun son masala yechimi',
        'answer' => date('Y-m-d') // Expected answer
    ),
    // Add more questions here
);

// Get a random question from the array
$randomQuestion = $questions[array_rand($questions)];

// Display the question to the user
// echo '<h4>'.$randomQuestion['question'].'</h4>';

// Check the user's submitted code
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userCode = $_POST['code'];

    // Execute the user's code using eval()
    ob_start();
    eval($userCode);
    $output = ob_get_clean();

    // Compare the result with the expected answer
    if (trim($output) === $randomQuestion['answer']) {
        // Redirect to the next section
        header("Location: exam.php");
        exit();
    } else {
        echo "Your code is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Code Compiler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>


    <p class=" align-items-center">
        <?php echo '<h4 class="align-items-center p-5">'.$randomQuestion['question'].'</h4>';?>


    </p>
    <h1 class="text-center">Code</h1>

    <form method="post" action="exam.php" class="justify-content-center align-items-center d-flex">
    <div class="form-group">
        <label for="code"> code yozing:</label>
        <textarea name="code" rows="5" cols="50" class="form-control" required></textarea>
    </div><br><br>
    <button type="submit" class="btn btn-primary m-2">Submit Code</button>
</form>

</body>
</html>
