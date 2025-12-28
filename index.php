<?php

require_once "config/database.php";
require_once "app/models/Member.php";

function show_menu()
{
    echo "\n---- MENU PR ----\n";
    echo "1: Gestion des membres\n";
    echo "2: Gestion des projets\n";
    echo "3: Gestion des activités\n";
    echo "0: Quitter\n\n";
}

function member_menu()
{
    echo "\n---- Membres ----\n";
    echo "1: Afficher tous les membres\n";
    echo "2: Ajouter un membre\n";
    echo "3: Modifier un membre\n";
    echo "4: Supprimer un membre\n";
    echo "5: Chercher un membre\n";
    echo "0: Retour\n\n";
}

$run = true;

while ($run) {

    show_menu();
    $choix = readline(":: ");

    if ($choix == 1) {

        $back = true;
        while ($back) {

            member_menu();
            $choix_member = readline(":: ");

           
            if ($choix_member == 1) {
                $members = Member::all(); 
                foreach ($members as $m) {
                    echo "ID: {$m['id']}, Nom: {$m['name']}, Email: {$m['email']}\n";
                }
            } 
            
            elseif ($choix_member == 2) {
                $name = readline("Nom : ");
                $email = readline("Email : ");

                $member = new Member();
                $member->setName($name);
                $member->setEmail($email);
                $member->save();

                echo "Membre ajouté !\n";
            } 
            
            elseif ($choix_member == 3) {
                $id = readline("ID du membre à modifier : ");
                $member = Member::findById($id); 
                if ($member) {
                    $newName = readline("Nouveau nom ({$member->getName()}): ");
                    $newEmail = readline("Nouvel email ({$member->getEmail()}): ");

                    if (!empty($newName))
                        $member->setName($newName);
                    if (!empty($newEmail))
                       $member->setEmail($newEmail);
                    $member->save();

                    echo "Membre modifié !\n";
                } else {
                    echo "Membre non trouvé !\n";
                }
            } 
           
            elseif ($choix_member == 4) {
                $id = readline("ID du membre à supprimer : ");
                $member = Member::findById($id);
                if ($member){
                    $member->delete();
                    echo "Membre supprimé !\n";
                } else {
                    echo "Membre non trouvé !\n";
                }
            } 
            
            elseif ($choix_member == 5) {
                $id = readline("ID du membre à chercher : ");
                $member = Member::findById($id);
                if ($member) {
                    echo "ID: {$member->getId()}, Nom: {$member->getName()}, Email: {$member->getEmail()}\n";
                } else {
                    echo "Membre non trouvé !\n";
                }
            } 
           
            elseif ($choix_member == 0) {
                $back = false;
            } 
            else {
                echo "Choix invalide !\n";
            }
        }

    } 
    elseif ($choix == 2) {
        echo "Gestion des projets (à implémenter)...\n";
    } 
    elseif ($choix == 3) {
        echo "Gestion des activités (à implémenter)...\n";
    } 
    elseif ($choix == 0) {
        echo "Au revoir 👋\n";
        $run = false;
    } 
    else {
        echo "Choix invalide !\n";
    }
}
