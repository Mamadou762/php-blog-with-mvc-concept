<?php

require '../database/connection.php';

$bdd = connectionDB();

function getPosts() {

    $req = $GLOBALS['bdd']->prepare('SELECT id, title, content, DATE_FORMAT(created_at, \'%d/%m/%Y à %Hh%imin%ss\') AS formatted_created_at FROM posts ORDER BY created_at DESC LIMIT 0, 5');
    $req->execute();
    $posts = $req->fetchAll(PDO::FETCH_OBJ);

    return $posts;
}


function getPostsById($id) {
    $req = $GLOBALS['bdd']->prepare("SELECT id, title, content, DATE_FORMAT(created_at, '%d/%m/%Y à %Hh%imin%ss') AS formatted_created_at FROM posts WHERE id = 2");
    $req->execute([$id]);
    $posts = $req->fetchAll(PDO::FETCH_OBJ);

    return $posts;
}

function getCommentsById($id) {
    return null;
}