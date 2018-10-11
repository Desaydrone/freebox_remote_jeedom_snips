# Télécommande vocale pour la FREEBOX
A l'aide de Snips et jeedom

Utilisation de Snips et jeedom pour controler oralement une freebox V6

Les fichiers à récupérer pour le moment :

- **scenario_remote.txt**, qui contient le script en lui même a mettre dans votre scénario
- **lst_chaine_tele.txt**, qui contient la liste des chaines télé de la freebox, et d'autre valeur pour les slot TypeName afin de pouvoir gérer le son, l'affichage du programme télé etc... Merci à Jeandhom qui à fournis le fichier de base avec toutes les chaines
- **TvChannelJeedom.txt** qui contient les valeurs de l'intent, celle de base fournie avec le plugin jeedom plus d'autre que j'ajoute au fur et a mesure.

Pour mettre en place ce script

## I - Sur l'assistant snips lui même
Dans l'intent TvChannelJeedom j'ai supprimé toutes les values de tvChannels et j'ai importé le contenu du fichier lst_chaine_tele.txt

## II - Supprimer de valeurs
Supprimer toutes les valeurs de l'intent TvChannelJeedom et importer le contenu du fichier TvChannelJeedom.txt

Important laissez bien la console snips finir de réfléchir pour qu'elle assimile toutes les nouveautés

## III - Mettre à jour snips avec la commande suivante
`sam update-assistant`

## IV - Créer un scénario
Ajouter un bloc de code et y copier le contenu du fichier nommé : **scenario_remote.txt**

N'oubliez pas de remplacer dans le fichier les **XXX** de la ligne suivante par le code de votre télécommande freebox, que vous pouvez trouvez dans les paramètres système de la freebox player

`$FreeRemoteCode = "XXXXX";`

## V - Dans le plugin snips de jeedom et dans l'intent TvChannelJeedom créer ceci :
Une action excecutant un scénario au quel je passe le tag suivant en paramettre
**#[Snips-Intents][TvChannelJeedom][channel]#**

## Soucis présent :
Je n'ai pas encore compris pourquoi snips de temps en temps m'envois le nom de la chaine et non pas son numéro
Par exemple je vais lui dire 5 fois de suite : "mets canal plus", 4 fois il va me retourner 4 et une fois canal plus je ne sais pas si c'est normal ou non. Si certain on la réponse à ce sujet je la veux bien.
Edit : Ca semble de moins en moins vrai car je n'ai plus de soucis depuis un moment, mais je surveille

j'espère que j'ai été clair :)


=====

Petite video de démonstration : https://youtu.be/ntSlGBUQ0c0

## v0.5
- mettre en pause un programme télé (ex : hey snips met en pause)
- reprendre le programme télé (ex : hey snips reprend le programme)
- avancer dans le timeshift (ex : hey snips avance dans le programme)
- reculer dans le timeshift (ex : hey snips recule dans le prgramme)
- reprendre le direct (ex : hey snips remet le direct)

## V0.4
- active le PiP (ex :hey snip active le pip)
- desactive le PiP (ex: hey snips desactive le pip)
- permute de chaine pour le pip (ex : hey snips permute le pip)

## V0.3
- Augmenter le volume  par pas de 25 (ex : Hey snips monte le son de la télé)
- Diminuer le volume  par pas de 25 (ex : Hey snips baisse le son de la télé)
- Muter la télé (ex : Hey snips coupe le son de la télé)
- Unmute la télé (ex : Hey snips remet le son de la télé)

## V0.2
- Accès à la télévision (ex : Hey snips mets la télévision)
- Accès à l'application twitch (ex : Hey snips mets twitch | le stream)
- Accès au programme télé (ex : Hey snips affiche le programme télé)
- Quitte le programme télé (ex : Hey snips quitte le programme télé)

## V0.1

- Permet de changer de chaîne en récupérant l'info venant de snips
