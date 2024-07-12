<div class="quiz-container" style="text-align: center; color: <?php echo $textColor; ?>">
    <br>
    <br>
    <h1>Kuis</h1>
    <hr>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $score = 0;

        foreach ($answers as $question => $correctAnswer) {
            if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
                $score++;
            }
        }

        echo '<div class="result-container">';
        echo '<h2>Hasil Kuis</h2>';
        echo '<br>';
        echo '<h5>Jawaban kamu benar sebanyak ' . $score . ' dari ' . count($answers) . '</h5>';
        echo '<br>';
        echo '<h5><a href="' . $tryAgainHref . '" style="color:' . $textColor . ';">Coba Lagi</a></h5>';
        echo '</div>';
    } else {
        echo '<form action="" method="post">';

        foreach ($questions as $qKey => $question) {
            echo '<div class="question">';
            echo '<h5>' . $question['question'] . '</h5>';
            echo '<div class="options">';
            foreach ($question['choices'] as $choiceKey => $choice) {
                echo '<h5><input type="radio" name="' . $qKey . '" value="' . $choiceKey . '"> ' . $choice . '</h5>';
            }
            echo '</div>';
            echo '</div>';
            echo '<br>';
        }

        echo '<br>';
        echo '<h5><input type="submit" value="Selesai"></h5>';
        echo '</form>';
    }
    ?>
</div>