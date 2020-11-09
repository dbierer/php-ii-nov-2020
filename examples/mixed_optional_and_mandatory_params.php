<?php
declare(strict_types=1);
class Topic {
    protected $title, $subTitle, $bullets;
    public function __construct(string $title, ?string $subTitle, array $bullets) {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->bullets = $bullets;
    }
}

$topic = new Topic('PHP 8 Tips', 123, ['ch1' => 'xxx', 'ch2' => 'yyy']);
