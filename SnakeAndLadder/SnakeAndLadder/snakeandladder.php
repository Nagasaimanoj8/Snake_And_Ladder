<?php
//UC1
class snake
{
    const LADDER = 3;
    const SNAKE = 1;
    const NOPLAY = 2;
    public $position = 0;

 
    /*function for palyer roll a die and
     get number between 1 to 6*/
    public function snakeandladder()
    {
        $startPosition = 0;
        echo "Player at starting position:" . $startPosition . "\n";
        echo "Rolling a die \n";
        $rollDie = rand(1, 6);
       // $startPosition+=$rollDie;
       // echo "current position is:".$startPosition;
       echo "getting a die number is:".$rollDie;
       return $rollDie;

        }
     //create function to check option for NO Play,Ladder,Snake
     public function nextMove()
     {
        while($this->position!=100)
        {
            $rollDie=$this->snakeandladder();
        
         $option = rand(1, 3);
         switch ($option) {
             case snake::LADDER:
                 echo " \n player on Ladder move to next position " . $this->position += $rollDie;
                 echo "\n";
                 echo "Current Position is:" . $this->position . "\n";
                 break;
                 
             case snake::SNAKE:
                 $this->position -= $rollDie;
                 echo "Current Position is:" . $this->position . "\n";
                 echo "\n";
                 break;
                 
             default:
                 echo " No Play " . $this->position = $this->position;
                 echo "\n";
                 echo "Current Position is:" . $this->position . "\n";
            }
        } 
     }
}
$obj = new snake();
//$obj->snakeandladder();
$obj->nextMove();
echo"PlayerWon";
?>