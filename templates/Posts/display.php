<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Details</title>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="container text-center">
            <h1>Post Details</h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <h2><?= h($post->author) ?></h2>
                <p><?= h($post->content) ?></p>
                <p><strong>Posted on:</strong> <?= h($post->created->format('Y-m-d')) ?></p>
            </div>
        </div>
    </main>
</body>

</html>
