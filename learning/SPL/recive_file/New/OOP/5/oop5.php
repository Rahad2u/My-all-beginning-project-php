<?php
class JatioSoggit{
    protected $song;
    protected $animalName;

    function __construct($song,$anithing)
    {
        $this->song = $song;
        $this->animalName = $anithing;
    }

   public function bangladesh(){
            echo "Amar sonar Bangla ami tomay valo basi \n";
   }
   public function india(){
    echo "Jonogomon-odhinaok jaohey varatvaggo bidhata \n";
}
   public function nepal(){
    echo "Nepal jatio soggit not found \n";
}
   public function nameAnimal(){
    echo "My favorite animal name is {$this->animalName}\n";
   }
   protected function singgarname(){
    echo "My favorite animal name is {$this->animalName}\n";
   }
}

class AnimalName extends JatioSoggit{
    protected $food;
    function __construct($foodName)
    {
        $this->food= $foodName;
        echo $this->song;
    }
    public function bangladesh(){ // modify function document
        echo "Amar sonar Bangla ami tomay valo basi; Author = Robindronath thakur; \n";
}
public function testing(){
    $this->singgarname();
}
}



$test = new JatioSoggit("james", "Elephant");
$test2 = new AnimalName("coconut");
$test->nameAnimal();

$test2->bangladesh();
$test2->testing();

