<?php
class Reader
{
	const ERR_FILE = 'ERROR: file not found';
	const ERR_SRCH = 'ERROR: search pattern not proper regex';
	public $contents;	// contents of a file
	public $filename;
	public function __construct(string $filename)
	{
		$this->filename = $filename;
	}
	/**
	 * Performs search
	 * 
	 * @param string $search : regex defining what you're looking for
	 * @return array $matches : empty array if nothing found
	 * @throws Exception $e : if file not found or search is empty
	 */
	public function search(string $search) : array
	{
		if (!file_exists($this->filename)) {
			throw new Exception(self::ERR_FILE);
		}
		if (empty($search)) {
			throw new InvalidArgumentException(self::ERR_SRCH);
		}
		$matches = [];
		$contents = file_get_contents($this->filename);
		preg_match_all($search, $contents, $matches);
		return $matches;
	}
}
try {
	$reader = new Reader(__DIR__ . '/gettysburg.txt');
	var_dump($reader->search('/four/i'));
} catch (Exception $e) {
	error_log(__FILE__ . ':' . $e->getMessage());
	echo "Sorry! Unable to proceed\n";
}
echo "\nAn Exception is not Fatal if it's caught!\n";
