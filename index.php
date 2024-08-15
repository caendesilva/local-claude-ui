<?php

// Check if the page is being accessed from localhost
if ($_SERVER['HTTP_HOST'] !== 'localhost' && $_SERVER['HTTP_HOST'] !== '127.0.0.1' && $_SERVER['HTTP_HOST'] !== 'claude.test') {
    die('<h1>Access Denied</h1><p>This page can only be accessed from localhost.</p>');
}

// If authentication passes, serve the chat.html content
readfile('chat.html');
