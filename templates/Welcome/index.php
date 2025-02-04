<h1>Welcome to the Team Roles Application</h1>
<p>Please choose an option below:</p>
<div class="button-group">
    <?= $this->Html->link('Take Team Roles Test', ['controller' => 'Responses', 'action' => 'add'], ['class' => 'test']) ?>
    <?= $this->Html->link('Questions', ['controller' => 'Questions', 'action' => 'index'], ['class' => 'questions']) ?>
    <?= $this->Html->link('All Team Roles', ['controller' => 'TeamRoles', 'action' => 'index'], ['class' => 'roles']) ?>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 50px;
    }
    .button-group {
        margin-top: 20px;
    }
    .questions {
        display: inline-block;
        padding: 15px 27px;
        margin: 10px;
        background-color:rgb(19, 12, 85);
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .roles {
        display: inline-block;
        padding: 15px 27px;
        margin: 10px;
        background-color:rgb(83, 65, 6);
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .test {
        display: inline-block;
        padding: 15px 27px;
        margin: 10px;
        background-color:rgb(38, 124, 44);
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    
    .button:hover {
        background-color: #0056b3;
    }
</style>