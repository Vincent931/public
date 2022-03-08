<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            width: 200px;
            margin: auto;
        }
        
        header, footer{
            background: gray;
        }
        .a1{
            font-size: medium;
        }
        
        .a2{
            font-size: large;
        }
        
        .a3{
            font-size:14px;
        }
        
        .a4{
            font-size: 14pt;
        }
    
        .a5{
            font-size: 150%;
        }
        
        .a6{
            font-size: 1.5em;
        }
        
        .a7{
            font-size: 1.5rem;
        }
        
        .f1{
            font-weight: bold;
        }
        
        .f2_1{
            font-weight: 700;
        }
        
        
        .f3{
            font-weight: bolder;
        }
        
        .f4{
            font-weight: lighter;
        }
        
        .f5{
            font_style: italic;
        }
        
        .f6{
            font-style: normal;
        }
        
        .l1{
            line-height: 1;
        }
        
        .l2{
            line-height: 1.5;
        }
        
        .l3{
            line-height: 4;
        }
        
        .ls1{
            letter-spacing: 0.5em;
        }
        
        .ws{
            word-spacing: 2em;
        }
        
        .ws1{
            white-space: normal;
        }
        
         .ws1{
            white-space: nowrap;
        }
        
         .ws1{
            white-space: pre;
        }
        
        .al1{
            text-align: left;
        }
        
        .al2{
            text-align: justify;
        }
        
        .tex1{
            text-indent: 30px;
        }
        
        .text1{
            text-transform: capitalize;
        }
        
        .text2{
            text-transform: uppercase;
        }
        
        .text3{
            text-transform: none;
        }
        
        .td1{
            text-decoration: underline;
        }
        
        
        .td2{
            text-decoration: none;
        }
        
        
        .td3{
            text-decoration: overline ;
        }
        
        
        .td4{
            text-decoration: underline red;
        }
        
        
        .td5{
            text-decoration: underline double orangered  ;
        }
        
        
        .td6{
            text-decoration: underline dashed green;
        }
        
        
        .td7{
            text-decoration: underline wavy teal;
        }
    </style>
    <link rel="stylesheet" href="css/common-v1.css"/>
	<link rel="stylesheet" href="css/theme.css"/>
</head>
<body>
<div>
<header><h1>Module 1 - Mise en forme></h1>

Découverte de la mise en forme du texte
</header>
Mise en forme des caratères

Utilisation des proriétés font-xxx

La taille
La propriété CSS font-size permet de définir la taille utilisée pour le texte.<br>

On peut utiliser une des valeurs prédéfinies comme <span class="a1">font-size: medium</span> mais ce n'est pas très utilisé.<br>
On peut utiliser une des valeurs prédéfinies comme <span class="a2"></span>font-size: large</span> mais ce n'est pas très utilisé.<br>
On peut utiliser une valeur absolue avec l'unité px, par exemple <span class="a3">font-size: 14px</span> mais ce n'est pas recommandé.<br>
On peut utiliser une valeur absolue avec l'unité pt (point comme dans Word), par exemple  <span class="a4">font-size: 14pt</span> mais ce n'est pas recommandé.<br>
On peut utiliser une valeur proportionnelle en pourcentage, par exemple <span class="a5">font-size: 150%</span> mais ce n'est pas très utilisé.<br>
Il est recommandé d'utiliser une valeur proportionnelle en em, par exemple <span class="a6">font-size: 1.5em.</span><br>
Comme alternative, on peut utiliser une valeur proportionnelle en rem (toujours proportionnelle à la taille définie à la racine du document, le ROOT, soit l'élément HTML), par exemple  <span class="a7">font-size: 1.5rem</span><br>

La graisse<br>
La propriété CSS font-weight permet de définir la graisse utilisée pour le texte.<br>

On peut mettre du texte en gras avec <span class="f1">font-weight: bold.</span><br>
 <strong>On peut supprimer le gras existant avec <span class="f2">font-weight: normal</span> (ici le texte est dans un élément &#12296;strong&#12297;).</strong><br>
Il est possible de donner un niveau de graisse (compris entre 100 et 900), par exemple <span class="f2_1">font-weight: 700</span> (équivalent du gras) si prévu par la police de caractères.<br>
<span class="f3">font-weight: bolder</span> permet d'augmenter la graisse si possible.<br>
<span class="f4">font-weight: lighter</span> permet de diminuer la graisse si possible.<br>

Le style
La propriété CSS font-style permet de définir le style utilisé pour le texte.<br>

On peut mettre du texte en gras avec <span class="f5">font-style: italic.</span><br>
On peut supprimer <em>le style existant avec <span class="f6">font-style: normal</span> (ici le texte est dans un élément &#12296;em&#12297;).</em><br>

Mise en forme des espacements<br>
Utilisation des proriétés line-height, letter-spacing, word-spacing et white-space<br>

La hauteur de ligne<br>
La propriété CSS line-height permet de définir la hauteur de ligne du texte (donc indirectement l'espacement entre les lignes).<br>
<span class="l1">Une ligne de texte avec la valeur line-height: 1 la valeur n'a pas d'unité.</span><br>
<span class="l2">Une ligne de texte avec la valeur line-height: 1.5 la valeur n'a pas d'unité.</span><br>
<span class="l3">Une ligne de texte avec la valeur line-height: 4 la valeur n'a pas d'unité.</span><br>

L'espacement entre les lettres<br>
La propriété CSS letter-spacing permet de définir l'espacement entre les lettres.<br>

<span class="ls1">Une ligne de texte avec la valeur letter-spacing: 0.5em avec l'unité em (de préférence).</span><br>

L'espacement entre les mots<br>
La propriété CSS word-spacing permet de définir l'espacement entre les mots.<br>

<span class="ws">Une ligne de texte avec la valeur word-spacing: 2em avec l'unité em (de préférence).</span><br>

Gestion des espaces (blancs)<br>
La propriété CSS white-space permet de gérer le comportement des espaces.<br>

<span class="ws1">Une ligne de texte avec la valeur white-space: normal, le texte retourne à la ligne normalement.</span><br>
<span class="ws2">Une ligne de texte avec la valeur white-space: nowrap le texte ne retourne pas à la ligne..</span><br>
<span class="ws3">Une ligne de texte avec la valeur white-space: pre</span>
			le texte se comporte comme dans l'élément &#12296;pre&#12297;.<br>

Mise en forme du texte<br>
Utilisation des proriétés text-xxx<br>

L'alignement et la justification du texte<br>
La propriété CSS text-align permet de définir l'alignement du texte.<br>

<span class="al1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, velit nulla! Vitae dolorem dignissimos temporibus sequi possimus ad nostrum quod rem quo ea cupiditate enim repudiandae perferendis quaerat eos culpa, at totam omnis architecto ipsam maiores inventore consequuntur. Modi fuga inventore dolorem iusto dolore eius maxime vero ut quisquam numquam.
Aliquid labore qui ducimus eum, fuga, soluta beatae distinctio, rem harum totam laboriosam nostrum aspernatur.</span><br>
<span class="al2"> Veritatis officia placeat et, tenetur laboriosam aut deserunt voluptate dicta. Eaque delectus vitae nesciunt corporis illo nemo, debitis, tempore molestiae laudantium nam quidem totam unde quis tempora atque illum voluptas earum velit nostrum nihil corrupti?
Temporibus provident ut harum ex facere, vitae error iure quis reprehenderit quam blanditiis asperiores est nesciunt pariatur saepe repellendus facilis rerum consequuntur fuga natus dolorem eos ipsam assumenda aliquid. Dignissimos tempore harum suscipit, repellat sint sunt ut labore eius ex, earum repellendus ad error consectetur fugit. Voluptatum voluptatem aperiam nulla!
Voluptate tempore, illo explicabo voluptatem a quae, eligendi porro dolore molestiae, blanditiis dolorum magnam pariatur? Nihil rem nulla minima doloremque quis quia dolore? Eos amet, deserunt pariatur reprehenderit cumque veniam ea, repellat explicabo magni facilis rerum voluptatibus illo ipsum velit esse sint laboriosam similique enim quia dolores animi harum iusto!</span>
<br>
L'indentation du texte<br>
La propriété CSS text-indent permet de définir l'indentation du texte.<br>

<span class="tex1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, velit nulla! Vitae dolorem dignissimos temporibus sequi possimus ad nostrum quod rem quo ea cupiditate enim repudiandae perferendis quaerat eos culpa, at totam omnis architecto ipsam maiores inventore consequuntur. Modi fuga inventore dolorem iusto dolore eius maxime vero ut quisquam numquam.</span><br>

La transformation du texte<br>
La propriété CSS text-transform permet de d'effectuer une transformation de la casse du texte (cette méthode est recommandée).<br>

<span class="text1">Avec la valeur text-transform: capitalize, la première lettre de chaque mot sera affichée en capitale.</span><br>
<span class="text2">Avec la valeur text-transform: uppercase, tous les caractères seront écrits en majuscule.</span><br>
<span class="text3">Avec la valeur text-transform: none, tous les caractères seront écrits en minuscule.</span><br>

La décoration du texte<br>
La propriété CSS text-decoration permet de définir une décoration au texte. On peut définir le type, le style et la couleur de la décoration.<br>

<span class="td1">La valeur text-decoration: underline permet de souligner le texte (avec la même couleur).</span><br>
<span class="td2">La valeur text-decoration: underline permet de supprimer le soulignement le texte (ici dans un lien).</span><br>
<span class="td3">La valeur text-decoration: overline permet de surligner le texte (avec la même couleur).</span><br>
<span class="td4">La valeur text-decoration: underline red permet de souligner le texte en rouge.</span><br>
<span class="td5">La valeur text-decoration: underline double orangered permet de souligner le texte en double (et en orange).</span><br>
<span class="td6">La valeur text-decoration: underline dashed green permet de souligner le texte en tirets (et en vert).</span><br>
<span class="td7">La valeur text-decoration: underline wavy teal permet de souligner le texte avec une vague (et en bleu).</span><br>
<footer>
		<p><a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/"><img alt="Propriété de la 3W Academy" src="https://3wa.fr/wp-content/themes/3wa2015/img/logos/big.png"></a></p>
	    <p>Propriété de la 3W Academy</p>
		<p>Ce matériel pédagogique est la propriété de la <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/">3W Academy</a>. Cet exercice a été réalisé par Stephane Pereck.</p>
</footer>>
</div>
</body>	
</html>
