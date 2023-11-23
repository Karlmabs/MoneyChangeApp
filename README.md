# MoneyChangeApp
Ce projet PHP propose une fonction `make_change` qui calcule la combinaison optimale de billets pour un montant donné.

## Lancement du projet avec Docker

1. Assurez-vous d'avoir Docker installé sur votre machine.

2. Clonez le repository :
   ```bash
   git clone https://github.com/Karlmabs/MoneyChangeApp.git

3. Accédez au répertoire du projet :
   ```bash
   cd MoneyChangeApp
  
5. Construisez l'image Docker et lancez le conteneur :
   ```bash
   docker-compose up

7. Accédez à l'application dans votre navigateur à l'adresse http://localhost:8080.


## Exécution des tests

Le projet inclut des tests unitaires pour la fonction make_change.

1. Assurez-vous d'avoir Docker installé sur votre machine.

2. Exécutez les tests avec la commande suivante :
   ```bash
   docker-compose -f docker-compose-tests.yml up


