<?php

permission_user();
permission_moderator();

require_once('admin/models/posts.php');

$pageId = intval($_GET['page_id']);
postDraft($pageId);

header('location:admin.php?controller=page&action=viewdraft');