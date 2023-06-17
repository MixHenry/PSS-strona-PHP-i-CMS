<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('articleList'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('articleList',      'ArticleListCtrl');
Utils::addRoute('articleListPart',  'ArticleListCtrl');
//Utils::addRoute('action_name', 'controller_class_name');