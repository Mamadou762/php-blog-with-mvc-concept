<?php

require 'src/model.php';
 
$post = getPostsById($id);
$comments = getCommentsById($id);
 
require('templates/post.php');