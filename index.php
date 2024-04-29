<?php

class ExtractMethod {
    public $name = "washi";
    public function printOwing(): void
    {
        $this->printBanner();
        print ("name: ". $this->name);
        print ("amount: ".$this->getOutstanding());
        echo "\n";
    }

    public function printBanner(): void{
        echo "This is print banner";
    }

    public function getOutstanding(): int
    {
        return 500;
    }

    public function printDetails($outstanding): void
    {

    }
}

$extract = new ExtractMethod();
$extract->printOwing();