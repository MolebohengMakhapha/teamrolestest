<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Response $response
 * @var \Cake\Collection\CollectionInterface|string[] $questions
 */
?>
<div class="row">
<?= $this->Html->link(__('Home'), ['controller' => 'Welcome', 'action' => 'index'], ['class' => 'button float-right']) ?>
    <div class="column column-80">
        <header>
            <h1><?= __('Team Roles Test') ?></h1>
            <p>Discover your team role by answering the following questions.</p>
        </header>
        
        <main>
            <?= $this->Form->create(null, ['url' => ['action' => 'submit']]) ?>
            <?php
                // Loop through the questions and create radio buttons for each
                foreach ($questions as $index => $question) {
                    echo '<div class="question">';
                    $questionNumber = $index + 1; // Calculate the question number
                    echo $this->Form->label("question{$index}", "{$questionNumber}. {$question->question_text}");

                    // Create an array of options for the radio buttons
                    $options = [
                        $question->answer_a => $question->answer_a,
                        $question->answer_b => $question->answer_b,
                    ];

                    // Create the radio buttons
                    echo $this->Form->radio("question{$index}", $options, ['legend' => false, 'required' => true]);
                    echo '</div>';
                }
            ?>
            <button type="submit"><?= __('Submit') ?></button>
            <?= $this->Form->end() ?>
        </main>

        <footer>
            <p>© 2025 Team Roles Test</p>
        </footer>
    </div>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background: #783a9f;
        color: white;
        padding: 20px;
        text-align: center;
    }

    main {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .question {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="radio"] {
        margin-right: 10px;
    }

    button {
        background: #783a9f;
        color: white;
        border: none;
        padding: 0px 15px;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background: #0056b3;
    }

    footer {
        text-align: center;
        margin-top: 20px;
    }
</style>