<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php

// class Game {
//
//     // properties
//    private $frame;
//    private $gameRecord;
//    private $score;
//     // methods
//
//     public function __construct() {
//         $this->frame = 0;
//         $this->gameScore = array();
//     }
//
//     public function bowlFrame() {
////         $curFrame = null;
////         if (frame == 10) {
////             $curFrame = new Frame(true);
////         } else {
////             $curFrame = new Frame(false);
////         }
////         $frameDone = false;
////         while (!frameDone) {
////             $curFrame.addRoll();
////             if ($curFrame.getThrows() == 0) {
////                 array_push(this->gameScore, $curFrame);
////             }
////         }
//     }
// }

 class Frame {
     private $pinFall;
     private $bonus;
     private $throws;
     private $score;
     private $isTenthFrame;

     public function __construct($isTenthFrame) {
         $this->pinFall = array(0,0);
         $this->bonus = 0;
         $this->score = 0;
         $this->throws = 1;
         $this->isTenthFrame = $isTenthFrame;
     }

     public function addRoll($pinFall) {
         // throw error if there is no more throws allowed
         if ($this->throws == 0) {
             return;
         }
         // first throw and strike
         if ($this->throws == 1 && $pinFall == 10) {
             if (!isTenthFrame) {
                 $this->bonus += 2;
                 $this->throws--;
             } else {
                 $this->throws++;
             }
             $this->pinFall[0] = $pinFall;

         // second throw
         } else if ($this->throws == 2) {
             // spare
             if ($this->pinFall[0] + $pinFall == 10) {
                 $this->bonus++;
                 if ($this->isTenthFrame) {
                     $this->throws++;
                 } else {
                     $this->throws -= 2;
                 }
             }
             $pinFall[1] = $pinFall;
         } else {
             $this->pinFall[2] = $pinFall;
         }
         $this->score += $pinFall;
     }

     /**
      * @throws Exception
      */
     public function addBonusPins($pins) {
         if ($pins < 0 || $pins > 10 || $this->bonus < 1) {
             throw new Exception('invalid amount of pins or bonus');
         }
         $this->bonus--;
         $this->score += $pins;
     }

     public function setBonus($bonus) {
         $this->bonus = bonus;
     }

     public function getBonus() {
         return $this->bonus;
     }

     public function setThrows($throws) {
         $this->throws = throws;
     }

     public function getThrows() {
         return $this->throws;
     }

     public function canRoll() {
         return $this->throws;
     }
 }

 $test = new Frame(true);
 $test->addRoll(10);
 $test->addRoll(10);
 $test->addRoll(10);
 try {
     $test->addBonusPins(10);
     $test->addBonusPins(10);
     $test->addBonusPins(10);
 } catch (Exception $e) {
 }



 ?>
 </body>
</html>