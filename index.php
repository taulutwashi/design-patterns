<?php

interface StrategyInterface
{
    public function showTitle(): string;
}

class StrategyCaps implements StrategyInterface
{

    /**
     * @return string
     */
    public function showTitle(): string
    {
        // TODO: Implement showTitle() method.
    }
}

class StrategyExclaim implements StrategyInterface
{

    /**
     * @return string
     */
    public function showTitle(): string
    {
        // TODO: Implement showTitle() method.
    }
}

class StrategyStars implements StrategyInterface{

    /**
     * @return string
     */
    public function showTitle(): string
    {
        // TODO: Implement showTitle() method.
    }
}

class StrategyContext {
    
    private $strategy = NULL;

    public function __construct($strategy) {
        switch ($strategy) {
            case "C":
                $this->strategy = new StrategyCaps();
                break;
            case "E":
                $this->strategy = new StrategyExclaim();
                break;
            case "S":
                $this->strategy = new StrategyStars();
                break;
        }
    }


    public function showBookTitle($book): string
    {
        return $this->strategy->showTitle($book);
    }
}

class Book
{
    private $author;
    private $title;
    function __construct($title,$author) {
        $this->author = $author;
        $this->title = $title;
    }
    public function getAuthor(): string{
        return $this->author;
    }

    public function getTitle(): string{
        return $this->title;
    }
    public function getAuthorAndTitle(): string {
        return $this->getTitle() . " by " . $this->getAuthor();
    }
}

writeln('Begin testing strategy pattern');
writeln('');

$book = new Book('PHP for Cats', 'Larry Truett');
$strategyContextC= new StrategyContext('C');
$strategyContextE= new StrategyContext('E');
$strategyContextS= new StrategyContext('S');

writeln('test 1 - show name context C');
writeln($strategyContextC->showBookTitle($book));
writeln('');

