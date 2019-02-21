<?php
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

function projectCalculate($project, $tasks) {
    $countProject = 0;
    foreach ($tasks as $task) {
        if ($task['project'] === $project) {
            $countProject++;
        }
    }
    return $countProject;
}

function xssFilter($str) {
    return htmlspecialchars(strip_tags($str));
}
