<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="css/common-v1.css"/>
	<link rel="stylesheet" href="css/theme.css"/>
    <style>
        cite{
            color:#00bfff;
        }
    </style>
</head>
<body>
    <header>
    <h1>Module 1 - Quelques citations</h1>
    Découverte des citations en HTML.
    </header>
<main>
Présentation<br>
Le langage HTML permet de gérer les citations de 2 manières différentes
Citer une phrase ou un terme (en ligne) au sein d'un paragraphe: utilisation de l'élément inline &#12296;q&#12297;; dans ce cas, le texte est en italique (par défaut).
Pour une citation plus longue ou pour un extrait complet d'un document : utilisation de l'élément &#12296;blockquote&#12297;; dans ce cas, le texte est indenté (par défaut).
Pour ajouter indiquer la source de la citation, on utilisera
L'élément &#12296;cite&#12297; à l'intérieur de l'élément &#12296;blockquote&#12297;;  pour y mettre le titre de la source (titre de l'oeuvre).
L'attribut  &#12296;cite&#12297; dans l'élément &#12296;q&#12297; pour y mettre la référence vers la source (une URL vers une page Web).
Par ailleurs, la langue de la citation peut être spécifiée avec l'attribut lang.<br>

Citations courte (en ligne)<br>
<q>Une citation de Marlène Dietrich en anglais: <cite>In language gender is particularly confusing</cite>. Why, please, should a table be male in German, female in French, and castrated in English? et en français: En langue, le genre est particulièrement déroutant. Pourquoi, s'il vous plaît, une table devrait-elle être masculine en allemand, féminine en français et castrée en anglais ?</q

Citation longue (bloc)<br>
<blockquote>La dictature parfaite : une dictature qui aurait les apparences de la démocratie, une prison sans murs dont les prisonniers ne songeraient pas à s'évader. Un système d'esclavage où, grâce la consommation et au divertissement, les esclaves auraient l'amour de leur servitude.

Un État totalitaire vraiment efficient serait celui dans lequel le tout-puissant comité exécutif des chefs politiques et leur armée de directeurs auraient la haute main sur une population d'esclaves qu'il serait inutile de contraindre, parce qu'ils auraient l'amour de leur servitude.
La leur faire aimer - telle est la tâche assignée dans les Etats totalitaires d'aujourd'hui aux ministères de la propagande, aux rédacteurs en chef des journaux, et aux maîtres d'école.></blockquote>
</main>
	<footer>
		<p><a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/"><img alt="Propriété de la 3W Academy" src="https://3wa.fr/wp-content/themes/3wa2015/img/logos/big.png"></a></p>
		<p>Ce matériel pédagogique est la propriété de la <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/">3W Academy</a>. Cet exercice a été réalisé par Stephane Pereck.</p>
	</footer>
</body>
</html>


