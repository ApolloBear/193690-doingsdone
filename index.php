<?php
// показывать или нет выполненные задачи
require('functions.php');
$show_complete_tasks = rand(0, 1);
$title = 'Дела в порядке';
$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
$tasks = [
    [
        'name' => 'Собеседование в IT компании',
        'date' => '01.12.2019',
        'project' => 'Работа',
        'complete' => 'Нет'
    ],
    [
        'name' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'project' => 'Работа',
        'complete' => 'Нет'
    ],
    [
        'name' => 'Сделать задание первого раздела',
        'date' => '21.12.2019',
        'project' => 'Учеба',
        'complete' => 'Да'
    ],
    [
        'name' => 'Встреча с другом',
        'date' => '22.12.2019',
        'project' => 'Входящие',
        'complete' => 'Нет'
    ],
    [
        'name' => 'Купить корм для кота',
        'date' => 'Нет',
        'project' => 'Домашние дела',
        'complete' => 'Нет'
    ],
    [
        'name' => 'Заказать пиццу',
        'date' => 'Нет',
        'project' => 'Домашние дела',
        'complete' => 'Нет'
    ]
];

$content = include_template('index.php', [
    'tasks' => $tasks,
    'show_complete_tasks' => $show_complete_tasks
]);

$layout = include_template('layout.php', [
    'content' => $content,
    'projects' => $projects,
    'tasks' => $tasks
]);

print $layout;
