<?php

$id    = $element['id'];
$class = $element['class'];
$attrs = $element['attrs'];

?>

<pre<?= $this->attrs(compact('id', 'class'), $attrs) ?>><code class="el-content"><?= str_replace("\n", '', $this->apply($element, 'e|nl2br')) ?></code></pre>
