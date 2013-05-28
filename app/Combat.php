<?php
class Combat {

    public static function fight ($player, $mob){

        if ((0 < $mob->getHealth()) && (0 < $player->getHealth())){
            Combat::combatRound($player,$mob);
                $mob->setHitPosition(AI::PositionAi());
                $mob->setBlockPosition(AI::PositionAi());
            Combat::combatRound($mob, $player);
        } else {
            Combat::winner($player, $mob);
        }

    }

    public static function winner($charact1, $charact2) {
        if ($charact1->getHealth() == 0) {
            Messages::combatMessage($charact1,'lose', '');
        } else {
            Messages::combatMessage($charact1, 'win', '');
        }

        if ($charact2->getHealth() == 0) {
            Messages::combatMessage($charact2, 'lose', '');
        } else {
            Messages::combatMessage($charact2, 'win', '');
        }



    }

    public static function combatRound ($attacker, $defender){

        if (($attacker->getHealth() > 0) && ($defender->getHealth() > 0)) {
            if (($attacker->getHitPosition() <> $defender->getBlockPosition ())){
                $takedamage = $attacker->getAttack() - $defender->getDefence();

                $defender->setHealth($takedamage);
                Messages::combatMessage($attacker,'attack', $takedamage);
            } else {
                Messages::combatMessage($attacker,'block', '');
            }

        }
    }

    public static function addCombatLogRow (){

    }

    public static function getCombatLogRow (){

    }

    public static function getCombatLog (){

    }
}