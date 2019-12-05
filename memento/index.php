<?php

include_once "editor.php";
include_once "editorMemento.php";

$editor = new Editor();

$editor->type('Текст 1');
$editor->type('Текст 2');

$saved = $editor->save();

$editor->type('Текст 3');

echo $editor->getContent();

$editor->restore($saved);

echo "<br>". $editor->getContent();

$editor2 = new Editor();
echo "<br>" . $editor2->getContent();