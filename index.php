<!--
Formulaire Informatique en HTML et CSS
HTML File
By Ulysse Valdenaire
01/08/2021
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Formulaire</h2>
    <form method="post" action="action.php">
        <div class="element">
            <label>Nom</label><br>
            <input name="nom" class="text" type="text" placeholder="Entrez votre nom" required><br>
        </div>
        <div class="element">
            <label>Prénom</label><br>
            <input name="prenom" class="text" type="text" placeholder="Entrez votre prénom" required><br>
        </div>
        <div class="element">
            <label>Email</label><br>
            <input id="email" name="email" class="text" type="email" placeholder="Entrez votre email" required><br>
        </div>
        <div class="element">
            <label>Age (optionnel)</label><br>
            <input name="age" class="text" type="number" value="0" placeholder="Age"><br>
        </div>
        <div class="element">
            <label>Quel métier voulez-vous exercer ?</label><br>
            <select name="metier" class="text">
                <option>Designer web</option>
                <option>Intégrateur web</option>
                <option>Développeur web</option>
                <option>Développeur mobile</option>
                <option>Développeur logiciel</option>
                <option>Développeur machine Learning</option>
            </select><br>
        </div>
        <div class="element">
            <label>Quel est votre niveau en informatique ? </label>
            <div>
                <input name="niveau" id="debutant" value="debutant" type="radio">
                <label for="debutant">Débutant</label>
            </div>
            <div>
                <input name="niveau" id="intermediaire" value="intermediaire" type="radio">
                <label for="intermediaire">Intérmédiaire</label>
            </div>
            <div>
                <input name="niveau" value="confirme" type="radio">
                <label for="confirme">Confirmé</label>
            </div>
            <div>
                <input name="niveau" value="expert" type="radio">
                <label for="expert">Expert</label>
            </div>
        </div>
        <div class="element">
            <label>Quelles technologies connaissez-vous ? </label>
            <div>
                <input name="HTML" type="checkbox">
                <label for="HTML">HTML</label>
            </div>
            <div>
                <input name="CSS" type="checkbox">
                <label for="CSS">CSS</label>
            </div>
            <div>
                <input name="js" type="checkbox">
                <label for="js">Javascript</label>
            </div>
            <div>
                <input name="php" type="checkbox">
                <label for="php">PHP</label>
            </div>
            <div>
                <input name="sql" type="checkbox">
                <label for="sql">SQL</label>
            </div>
            <div>
                <input name="python" type="checkbox">
                <label for="python">Python</label>
            </div>
            <div>
                <input name="java" type="checkbox">
                <label for="java">Java</label>
            </div>
            <div>
                <input name="C" type="checkbox">
                <label for="C">C</label>
            </div>
            <div>
                <input name="CSharp" type="checkbox">
                <label for="CSharp">C#</label>
            </div>
            <div>
                <input name="C++" type="checkbox">
                <label for="C++">C++</label>
            </div>
            <div>
                <input name="bootstrap" type="checkbox">
                <label for="bootstrap">Bootstrap</label>
            </div>
            <div>
                <input name="angular" type="checkbox">
                <label for="angular">Angular</label>
            </div>
            <div>
                <input name="react" type="checkbox">
                <label for="react">React</label>
            </div>
            <div>
                <input name="swift" type="checkbox">
                <label for="swift">Swift</label>
            </div>
        </div>
        <div class="element">
            <label>Autres</label><br>
            <input name="autre" class="text" placeholder="Connaissez-vous autre chose ?" type="text"><br>
        </div>
        <div class="element">
            <label>Autres commentaires ou suggestions ?</label><br>
            <textarea name="message" placeholder="Entrez votre commantaire ici..."></textarea>
        </div>
        <input class="button" type="submit" value="Valider">
    </form>
</body>

</html>