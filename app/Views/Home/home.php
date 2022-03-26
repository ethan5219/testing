<head>
<link rel="stylesheet" id="cf7cf-style-css" href="/css/refcss/temp.css" type="text/css" media="all">
</head>

<body>
<div class="maintext">

<h2><?= esc($title) ?></h2>

<?php if (! empty($comp) && is_array($comp)) : ?>

    <?php foreach ($comp as $x): ?>

        <h3><?= esc($x['CompID']) ?></h3>

        <div class="main">
            <?= esc($x['CompName']) ?>
        </div>
        <p><a href="/serviceline/<?= esc($x['CompName'], 'url') ?>">View article</a></p>  

    <?php endforeach; ?>
    
    

<ul class="flex-container">
  <li class="flex-item">1</li>
  <li class="flex-item">2</li>
  <li class="flex-item">3</li>
  <li class="flex-item">4</li>
  <li class="flex-item">5</li>
  <li class="flex-item">6</li>
</ul>

    
    

<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

</div>

</body>

