<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Blog App</title>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="container text-center">
            <h1>Simple Blog App</h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <?= $this->Flash->render() ?>
                <h2>Create a New Post</h2>
                <?= $this->Form->create($post) ?>
                <fieldset>
                    <legend><?= __('Add a Post') ?></legend>
                    <?= $this->Form->control('author', ['label' => 'Author', 'type' => 'text']) ?>
                    <?= $this->Form->control('content', ['label' => 'Post', 'type' => 'textarea']) ?>
                    <?= $this->Form->control('created', ['label' => 'Date', 'type' => 'date']) ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>

                <h2>Posts</h2>
                <?php if (!empty($posts)) : ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Author</th>
                                <th>Post</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $post) : ?>
                                <tr>
                                    <td><?= h($post->author) ?></td>
                                    <td><?= h($post->content) ?></td>
                                    <td><?= h($post->created) ?></td>
                                    <td>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id], ['class' => 'button']) ?>
                                        <?= $this->Form->create(null, [
                                            'url' => ['action' => 'delete', $post->id],
                                            'type' => 'post',
                                            'onsubmit' => 'return confirm("Are you sure you want to delete this post?");'
                                        ]) ?>
                                        <?= $this->Form->button(__('Delete'), ['type' => 'submit', 'class' => 'delete-button']) ?>
                                        <?= $this->Form->end() ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else : ?>
                    <p>No posts found.</p>
                <?php endif; ?>
            </div>
        </div>
    </main>
</body>

</html>
