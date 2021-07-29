<?php
include __DIR__ . '/../db/cds.php';

header('Content-Type: application/json');
echo json_encode($cds);