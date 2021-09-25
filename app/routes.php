<?php
require SRC_PATH . '/Router.php';
require SRC_PATH . '/BaseController.php';
require SRC_PATH . '/StatisticsController.php';

Router::get('/', [BaseController::class, 'default']);
Router::get('/get-statistics', [StatisticsController::class, 'getSiteStatistcs']);
Router::post('/post-statistics', [StatisticsController::class, 'postSiteStatistic']);
Router::patch('/update-statistics', [StatisticsController::class, 'updateSiteStatistic']);
Router::delete('/delete-statistics', [StatisticsController::class, 'deleteSiteStatistic']);
Router::options('/get-routes', [BaseController::class, 'listRoutes']);