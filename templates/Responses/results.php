<?php
/**
 * @var \App\View\AppView $this
 * @var array $scores
 */
?>
<div class="results">
    <h1><?= __('Your Team Roles') ?></h1>
    <?php
    $highestRole = array_keys($roleScores, max($roleScores))[0];
    ?>
    <h2>Your Team Role is: <?= h($highestRole) ?></h2>
        
    <p>A total of 100 points are divided over the various roles. A group role can have up to 25 points.</p>
    <p>Based on your responses, your answers have been used to identify which team role(s) suit you best in the table below. This suitability is expressed as a percentage.</p>

<table>
    <thead>
        <tr>
            <th>Team Role</th>
            <th>Score (%)</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($roleScores as $role => $score): ?>
            <tr>
                <td><?php echo h($role); ?></td>
                <td><?php echo h($score); ?>%</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<h2>Role Descriptions</h2>
<p>Below are the descriptions of each team role based on your scores:</p>

<ul>
    <li><strong>Executive:</strong> The executive is disciplined and eager to get the job done. They are efficient, practical, and systematic.</li>
    <li><strong>Completer:</strong> Completers are conscientious and feel responsible for the team's achievements, ensuring high standards of quality control.</li>
    <li><strong>Team Player:</strong> Team players are caring and foster harmony, emphasizing solidarity and team cohesion.</li>
    <li><strong>Analyst:</strong> Analysts are reserved and critical, favoring a prudent approach to matters.</li>
    <li><strong>Chairperson:</strong> Chairpersons coordinate the team, maintaining communication and respect among members.</li>
    <li><strong>Expert:</strong> Experts possess the skills required for specific tasks and prefer to work independently.</li>
    <li><strong>Explorer:</strong> Explorers are extroverted and curious, often presenting ideas and developing new contacts.</li>
    <li><strong>Innovator:</strong> Innovators are creative and original, playing a crucial role in problem-solving.</li>
    <li><strong>Driver:</strong> Drivers are ambitious and energetic, motivating the team to succeed.</li>
</ul>
    <p>Thank you for taking the test!</p>
    <?= $this->Html->link(__('Back to Home'), ['controller' => 'Welcome', 'action' => 'index'], ['class' => 'button']) ?>
</div>