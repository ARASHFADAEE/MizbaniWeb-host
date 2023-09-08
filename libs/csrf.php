<?php
session_start();
$csrfToken = bin2hex(random_bytes(32));
// setcookie("csrfToken", $csrfToken);
$_SESSION['csrfToken'] = $csrfToken;

echo json_encode(['csrfToken' => $csrfToken]);