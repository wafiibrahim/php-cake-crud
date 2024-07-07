<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Post</title>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="container text-center">
            <h1>Edit Post</h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <?= $this->Flash->render() ?>
                <h2>Edit the Post</h2>
                <?= $this->Form->create($post) ?>
                <fieldset>
                    <legend><?= __('Edit Post') ?></legend>
                    <?= $this->Form->control('author', ['label' => 'Author', 'type' => 'text']) ?>
                    <?= $this->Form->control('content', ['label' => 'Post', 'type' => 'textarea']) ?>
                    <?= $this->Form->control('created', ['label' => 'Date', 'type' => 'date']) ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </main>
</body>

</html>
