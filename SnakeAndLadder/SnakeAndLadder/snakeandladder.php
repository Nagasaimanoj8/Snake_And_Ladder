<?php
//UC1
class snake
{
    const LADDER = 1;
    const SNAKE = 2;
    const NOPLAY = 0;
    public $position = 0;

 
    /*function for palyer roll a die and
     get number between 1 to 6*/
    public function snakeandladder()
    {
        $startPosition = 0;
        echo "Player at starting position:" . $startPosition . "\n";
        echo "Rolling a die ";
        $rollDie = rand(1, 6);
       // $startPosition+=$rollDie;
       // echo "current position is:".$startPosition;
        $this->nextMove($rollDie);
    }
     //create function to check option for NO Play,Ladder,Snake
     public function nextMove($rollDie)
     {
         $option = rand(0, 2);
         switch ($option) {
             case snake::LADDER:
                 echo " player on Ladder move to next position " . $this->position += $rollDie;
                 echo "\n";
                 break;
             case snake::SNAKE:
                 echo " player on snake move to previous Position " . $this->position -= $rollDie;
                 echo "\n";
                 break;
             default:
                 echo " No Play " . $this->position = $this->position;
                 echo "\n";
         }
         echo "Current Position is:" . $this->position . "\n";
     }
}
$obj = new snake();
$obj->snakeandladder();
?>