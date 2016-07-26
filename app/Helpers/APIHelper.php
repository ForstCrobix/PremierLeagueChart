<?php

namespace App\Helpers;

class APIHelper
{
    public function GetAPIData($url){
        //Initialise session
        $ch = curl_init();

        //Set options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_HTTPHEADER, array('X-Auth-Token: 5c6beb639cfe430bb0ca5e45f65ec04a'));

        //Execute session
        return curl_exec($ch);
    }

    private function GetIDFromUrl($url){
        $split = explode('/', $url);
        return end($split);
    }

    private function ParseDate($date){
        $date = str_replace("T", " ", $date);
        $date = str_replace("Z", "", $date);
        return $date;
    }

    public function GetTeamData($json){
        $jsonTeams = json_decode($json)->teams;
        $teams = array();
        foreach($jsonTeams as $team) {
            /*$team_url = explode('/', $team->_links->self->href);
            $team_id = end($team_url);*/
            $team_id = self::GetIDFromUrl($team->_links->self->href);
            $teams[] = array($team_id ,$team->name);
        }

        return $teams;
    }

    public function GetFixturesData($json, $teams) {
        $jsonFixtures = json_decode($json)->fixtures;
        $fixtures = array();
        foreach($jsonFixtures as $fixture) {
            $fixture_id = self::GetIDFromUrl($fixture->_links->self->href);
            $home_id = $teams[array_search($fixture->homeTeamName, array_column($teams, 'name'))]['id'];
            $away_id = $teams[array_search($fixture->awayTeamName, array_column($teams, 'name'))]['id'];
            $fixtures[] = array($fixture_id,
                                self::ParseDate($fixture->date),
                                $fixture->matchday,
                                $home_id,
                                $away_id,
                                null);
        }

        return $fixtures;
    }
}