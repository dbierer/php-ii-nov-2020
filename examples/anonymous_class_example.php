<?php
$response = [
	'html' => new class() {
		public function render($data)
		{
			echo '<!DOCTYPE html><body>';
			echo '<ul><li>';
			echo implode('</li><li>', $data);
			echo '</li></ul>';
			echo '</body>';
		}
	},
	'json' => new class() {
		public function render($data)
		{
			echo json_encode($data, JSON_PRETTY_PRINT);
		}
	},
];
$data = ['A' => 111, 'B' => 222, 'C' => 333];
$type = $_GET['type'] ?? 'json';
$render = $response[$type] ?? $response['html'];
$render->render($data);

		
