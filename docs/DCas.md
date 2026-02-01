```plantuml
@startuml
' ============================================
' DIAGRAMME DE CAS D'UTILISATION (Use Case)
' ============================================

skinparam packageStyle rectangle
skinparam usecaseBDiagramme de cas d’utilisation
Diagramme de classes avec relations
Finalisation du README
Tests globaux
Nettoyage du projet
Bonus :
Authentification Laravel
Protection des routes
Déploiement de l’application
ackgroundColor LightGreen
skinparam usecaseBorderColor DarkGreen
skinparam actorBackgroundColor LightBlue
skinparam actorBorderColor DarkBlue

title Diagramme de Cas d'Utilisation - Groupify

actor "Utilisateur" as User #LightBlue

rectangle "Gestion des Groupes" {
    usecase "Créer un groupe" as UC1 #LightGreen
    usecase "Lister les groupes" as UC2
    usecase "Modifier un groupe" as UC3
    usecase "Supprimer un groupe" as UC4
}

rectangle "Gestion des Contacts" {
    usecase "Créer un contact" as UC5 #LightGreen
    usecase "Lister les contacts" as UC6
    usecase "Modifier un contact" as UC7
    usecase "Supprimer un contact" as UC8
}

rectangle "Fonctionnalités Avancées" {
    usecase "Associer contact à groupe" as UC9 #LightGreen
    usecase "Filtrer par groupe" as UC10
    usecase "Rechercher contact" as UC11
    usecase "Afficher statistiques" as UC12
}

User --> UC1
User --> UC2
User --> UC3
User --> UC4

User --> UC5
User --> UC6
User --> UC7
User --> UC8

User --> UC9
User --> UC10
User --> UC11
User --> UC12

UC5 ..> UC9 : <<include>>
UC6 ..> UC10 : <<include>>
UC6 ..> UC11 : <<include>>
UC12 ..> UC2 : <<include>>
UC12 ..> UC6 : <<include>>
@enduml
```
