<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bienvenue</title>

</head>

<body>
<section id="container">
    <h1>Bonjour</h1>
    <h3>Voici vos informations : </h3>
    <p>Nom : <?php echo htmlspecialchars($_POST['nom']);?></p>
    <p>Prénom : <?php echo htmlspecialchars($_POST['prenom']);?></p>
    <p>Email : <?php echo htmlspecialchars($_POST['email']);?></p>
    <p>Age : <?php echo htmlspecialchars($_POST['age']);?></p>
    <p>Métier : <?php echo htmlspecialchars($_POST['metier']);?></p>
    <?php
        $niveau;
        $_POST['niveau'];
        switch ($_POST['niveau'])
        {
            case 'debutant':
             $niveau = "Débutant";
            break;
            case 'intermediaire':
                $niveau = "Intermediaire";
            break;
            case 'confirme':
                $niveau = "Confirmé";
            break;
            case "expert":
                $niveau = "Expert";
            break;
        }    
        ?>
    <p>Niveau : <?php echo $niveau;?></p>
    <p>Vos connaissances : </p>
    <?php
   $listeTech = array();
   if(isset($_POST['HTML']))
   {
       $listeTech[] = 'HTML';
   }
   if(isset($_POST['CSS']))
   {
       $listeTech[] = 'CSS';
   }
   if(isset($_POST['js']))
   {
       $listeTech[] = 'Javascript';
   }
 
   if(isset($_POST['php']))
   {
       $listeTech[] = 'PHP';
   }
   if(isset($_POST['sql']))
   {
       $listeTech[] = 'SQL';
   }
   if(isset($_POST['python']))
   {
       $listeTech[] = 'Python';
   }
   if(isset($_POST['java']))
   {
       $listeTech[] = "Java";
   }
   if(isset($_POST['C']))
   {
       $listeTech[] = 'Langage C';
   }
   if(isset($_POST['CSharp']))
   {
       $listeTech[] = "C Sharp";
   }
   if(isset($_POST['C++']))
   {
       $listeTech[] = "C++";
   }
   if(isset($_POST['bootstrap']))
   {
       $listeTech[] = "Bootstrap";
   }
   if(isset($_POST['angular']))
   {
       $listeTech[] = "Angular";
   }
   if(isset($_POST['react']))
   {
       $listeTech[] = "React";
   }
   if(isset($_POST['swift']))
   {
       $listeTech = "Swift";
   }
   ?>
   <ul>
  <?php foreach($listeTech as $element)
   {  
       echo "<li>$element</li>"; 
   }
   ?>
</ul>
    <p>Autres : <?php echo htmlspecialchars($_POST['autre']);?></p>
    <p>Votre message : <?php echo htmlspecialchars ($_POST['message']);?></p>
    <p>Modifier le formulaire : <a href="index.php">ICI</a>
</section>
 
</body>

</html>