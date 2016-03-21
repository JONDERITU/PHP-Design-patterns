/**
 * Cytonn Technologies
 *
 * @author: Joseph Gichane <jgichane@cytonn.com>
 *
 * Project: design_patterns.app
 *
 */
<?php
  require_once('connection.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'home';
  }

  require_once('views/layout.php');
?>