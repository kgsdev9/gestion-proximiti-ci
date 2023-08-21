<?php

return [

    'busted_budget' => ':project_name a dépassé le budget',
    'busted_budget_desc' => 'Le projet a dépassé le budget. <br/>Total budget: <b>$:total_budget</b><br/>Total budget used: <b>$:total_used</b>',
    'almost_busted_budget' => ':project_name a presque dépassé son budget',
    'almost_busted_budget_desc' => 'Le projet a atteint 90 % du budget. <br/>Total budget: <b>$:total_budget</b><br/>Total budget used: <b>$:total_used</b>',
    'busted_budget_on_project' => '<b>:supplier_name</b> has busted budget on project :project_name',
    'busted_budget_on_project_desc' => 'Le client dépasse le budget du projet <b>:project_name</b><br/>Total budget from PO: <b>$:total_budget</b><br/>Total budget used: <b>$:total_used</b>',
    'almost_busted_budget_on_project' => '<b>:supplier_name</b> atteint 90 % du budget du projet : project_name',
    'almost_busted_budget_on_project_desc' => 'Le budget du client atteint 90 % sur le projet <b>:project_name</b><br/>Total budget from PO: <b>$:total_budget</b><br/>Total budget used: <b>$:total_used</b>',
    'busted_time_estimate' => '<b>:project_name</b> a dépassé l\'estimation du temps',
    'busted_time_estimate_desc' => 'Le projet a dépassé l\'estimation du temps.<br/>Estimated time: <b>:total_estimate h</b><br/>Total time worked: <b>:total_worked h</b>',
    'almost_busted_time_estimate' => '<b>:nom du projet</b> a dépassé l\'estimation du temps',
    'almost_busted_time_estimate_desc' => 'Le projet a atteint 90 % de l\'estimation du temps.<br/>Estimated time: <b>:total_estimate h</b><br/>Total time worked: <b>:total_worked h</b>',
    'unapproved_hours' => '<b>:project_name</b> a des heures non approuvées',
    'unapproved_hours_desc' => 'Le projet a des heures confirmées mais pas encore approuvées, entre <b>:start_date</b> and <b>:end_date</b>.<br/>',
    'overtime_employees' => '<b>:supplier_name</b> has overtime employees',
    'overtime_employees_desc' => 'Le client a <b>:number</b> employee(s) avec plus de 13 heures de travail: :names',
    'unset_professions' => '<b>:supplier_name</b> a des métiers sans prix',
    'unset_professions_desc' => 'Le client a <b>:number</b> profession(s) sans prix: :names',

];
