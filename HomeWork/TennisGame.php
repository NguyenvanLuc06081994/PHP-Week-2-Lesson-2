<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */

class TennisGame
{
    const zero = 0;
    public $score = '';

    public function getScore($player1Name, $player2Name, $player1Socre, $player2Score)
    {
        $tempScore = self::zero;
        $this->getScoreWhenEqual($player1Socre, $player2Score);
        $this->checkWin($player1Socre, $player2Score);
        for ($i = 1; $i < 3; $i++) {
            $player1 = $i == 1;
            if ($player1) $tempScore = $player1Socre;
            else {
                $this->score .= "-";
                $tempScore = $player2Score;
            }
            switch ($tempScore) {
                case self::zero:
                    $this->score .= "Love";
                    break;
                case 1:
                    $this->score .= "Fifteen";
                    break;
                case 2:
                    $this->score .= "Thirty";
                    break;
                case 3:
                    $this->score .= "Forty";
                    break;


            }
        }
    }

    public function getScoreWhenEqual($player1Socre, $player2Score)
    {
        if ($player1Socre == $player2Score) {
            switch ($player1Socre) {
                case self::zero:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        }
    }

    public function checkWin($player1Socre, $player2Score)
    {
        $winPointPlayer1 = $player1Socre >= 4;
        $winPointPlayer2 = $player2Score >= 4;
        if ($winPointPlayer1 || $winPointPlayer2) {
            $minusResult = $player1Socre - $player2Score;
            if ($minusResult == 1) $this->score = "Advantage player1";
            else if ($minusResult == -1) $this->score = "Advantage player2";
            else if ($minusResult >= 2) $this->score = "Win for player1";
            else $this->score = "Win for player2";
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}