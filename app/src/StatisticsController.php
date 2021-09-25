<?php

class StatisticsController
{
    public function getSiteStatistcs($source = null)
    {

        if(array_key_exists('source', $_REQUEST) && $_REQUEST['source'] == 2){
            return [
                'error' => false,
                    'data' => [
                    'Stack Overflow' => 1000000,
                    'Stack Exchange' => 1000,
                    'XDA Developers' => 12313
                ]
            ];
        }

        return [
            'error' => false,
            'data' => [
                    'GoogleAnalytics' => 100,
                    'Google' => 1000,
                    'Facebook' => 12313
                ]
        ];
    }

    public function postSiteStatistic()
    {
        // data should be added into db
        // by using some orm we should add things inside database - also we should perform some kind of data validation before storing data
        // if something isnt sent as a request data then we should return validation error


        return "Data has been added successfully";
    }

    public function deleteSiteStatistic()
    {
        // we should find the corresponding data entry with the orm and then we should delete it and inform the client about successfull/unsuccessfull deletion

        return "Deletion successfull";
    }

    public function updateSiteStatistic()
    {
        return "Updated";
    }

    public function showSiteStatistic(){
        return $this->getSiteStatistcs();
    }
}
