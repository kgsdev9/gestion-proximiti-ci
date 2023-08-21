<?php

return [

	/******* Main template *******/
    'title' => 'Feuilles de temps',
    'start_date' => 'Date de début',
    'end_date' => 'Date de fin',
    'list' => 'Liste des feuilles de temps',
    'show' => 'Afficher',
    'time_sheets_list' => 'Liste des feuilles de temps',
    'date' => 'Date',
    'view' => 'Voir',
    'image' => 'Image(s)',
    'code_gain_text' => 'Veuillez saisir le code de gain pour les heures régulières et les heures supplémentaires.',
    'employees' => 'Employés',
    'employee' => 'Employé',
    'teams' => 'Équipes',
    'projects' => 'Projets',
    'all' => 'Tout',
    'view_html' => 'Afficher le code HTML',
    'generate_csv' => 'Générer un fichier XLS',
    'print' => 'Imprimer',
    'accounting' => 'Comptabilité',
    'timesheet_report' => 'Rapport des feuilles de temps',
    'download_pdf' => 'Télécharger le PDF',
    'empty_results' => 'Il n\'y a pas de feuilles de temps pour cette période.',

    /******* Controller *******/
    'title' => 'Feuilles de temps',

    /******* Accounting *******/
    'generate_avantage' => 'Générer un fichier Avantage Pay',
    'avantage_text_1' => 'Cela générera un fichier .txt que vous pourrez importer dans votre logiciel Avantage.<br/>
                The format of this query is <b>TimeZone</b> (only compatible with <u>Implication</u> and <u>Intégration</u> versions).<br/>
                <b>Before generating the file</b>, please make sure that every projects and employees have their Avantage\'s Number setted (you can set this by editing a project or an employee).<br/><br/>
                To import the file in Avantage, go to <u>Opérateur</u> >> <u>Échange de données</u> >> <u>Importation</u> >> <u>TimeZone</u><br/><br/>',
    'code_de_gain' => 'Code de Gain',
    'avantage_text_2' => 'Lors de l\'importation d\'un fichier dans Avantage, vous aurez la possibilité de créer un <u>Code de Gain</u>.<br/>
                    You need to create one for regular time and one for overtime. Once created, please enter them here:',
    'code_de_gain_rt' => 'Code de gain pour le temps régulier',
    'code_de_gain_ot' => 'Code de gain pour les heures supplémentaires',
    'generate_with' => 'Générer avec',
    'tasks' => 'Tâches',
    'generate_file' => 'Générer un fichier',
    'warning_avantage_1' => '<b>Warning</b>: Certains projets, tâches ou employés n\'ont pas de numéro Avantage.',
    'warning_avantage_2' => '<br/><br/>Le suivant <u>project(s)</u> n\'a pas de numéro de projet Avantage. Cliquez sur le lien pour définir leur identifiant avantage.<br/>',
    'warning_avantage_3' => '<br/><br/>Le suivant <u>task(s)</u> n\'a pas de numéro de tâche Avantage. Cliquez sur le lien pour définir leur identifiant avantage<br/>',
    'warning_avantage_4' => '<br/><br/>Le suivant <u>employee(s)</u> n\'a pas de numéro d\'employé Avantage. Cliquez sur le lien pour définir leur identifiant avantage.<br/>',
    'warning_avantage_5' => 'Une fois tous les numéros d\'Avantages saisis, cliquez sur le lien ci-dessous pour générer à nouveau le fichier.',
    'warning_avantage_6' => 'Vous pouvez forcer la génération du fichier si vous le souhaitez, mais les projets sans numéro seront laissés vides et les employés sans numéro ne pourront pas être générés.<br/>',
    'refresh' => 'Rafraîchir',
    'generate_file_anyway' => 'Générer un fichier quand même',

    /******* Print *******/
    'timesheet' => 'Feuille de temps',
    'to' => 'à',
    'project' => 'Projet',
    'signature' => 'Signature',
    'total_time' => 'Temps total',
    'total' => 'Total',
    'grand_total' => 'Grand Total',

];
