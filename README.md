
# Portfolio Personnel

Ce portfolio présente mes projets et compétences en développement web.

## 🚀 Contenu

- Présentation de projets réalisés
- Informations personnelles et professionnelles
- Formulaire de contact

## 🛠 Prérequis

- Docker
- Docker Compose
- Git

## 📦 Installation

1. Clonez le dépôt :

   ```bash
   git clone https://github.com/Kaiizer26/portfolio-dynamique.git
   cd portfolio-dynamique/
   ```

2. Lancez l'application avec Docker Compose :

   ```bash
   docker compose up --build
   ```

   Cette commande construit les images et démarre les conteneurs. Si les images existent déjà et que vous n'avez pas modifié le Dockerfile, vous pouvez utiliser :

   ```bash
   docker compose up
   ```

   Cela démarrera les conteneurs sans reconstruire les images. 

## 🌐 Utilisation

Accédez à l'application via votre navigateur : [http://localhost:8080](http://localhost:8080)

## 📁 Structure du projet

```
portfolio/
├── public/
│   ├── css/
│   │   └── style.css        
│   ├── images/
│   ├── js/
│   │   └── app.js
│   ├── index.php            # Point d'entrée
│   ├── .htaccess
│   
├── src/                     # Code source
│   ├── Controllers/         # Contrôleurs
│   │   └── MainController.php   
│   ├── Models/              # Modèles
│   │   └── Project.php
│   │   └── Technology.php
│   │   └── Tool.php              
│   └── Database/
│   │   └── Database.php              # Configuration BD
├── templates/               # Templates
│   ├── partials/
│   │   └── footer.php
│   │   └── header.php
│   ├── home.php             # Page d'accueil
│   ├── construction.php            # Page construction
│   └── contact.php          # Contact
├── composer.json            # Dépendances PHP
├── Dockerfile               # Configuration Docker
├── init.sql               
├── LICENSE               
├── README.md               
└── docker-compose.yml       # Configuration Docker Compose
```

## 🔧 Configuration

### Variables d'environnement (docker-compose.yml)

```yaml
services:
  web:
    build: .
    ports:
      - "8080:80"
    environment:
      - DB_HOST=db
      - DB_PORT=5432
      - DB_NAME=portfolio
      - DB_USER=postgres
      - DB_PASSWORD=password

  db:
    image: postgres:15
    volumes:
      - postgres_data:/var/lib/postgresql/data
    environment:
      - POSTGRES_DB=portfolio
      - POSTGRES_USER=postgres
      - POSTGRES_PASSWORD=password

volumes:
  postgres_data:
```

## 📝 Base de données

La base de données PostgreSQL est initialisée avec la structure suivante :

```sql
DROP TABLE IF EXISTS technologies CASCADE;
CREATE TABLE IF NOT EXISTS technologies (
    id_technology SERIAL PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL,
    level VARCHAR(50) NOT NULL,
    image_path VARCHAR(255)
);

DROP TABLE IF EXISTS tools CASCADE;
CREATE TABLE IF NOT EXISTS tools (
    id_tool SERIAL PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL,
    service VARCHAR(50) NOT NULL,
    image_path VARCHAR(255)
);

DROP TABLE IF EXISTS projects CASCADE;
CREATE TABLE IF NOT EXISTS projects (
    id_project SERIAL PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL,
    description VARCHAR(255) NOT NULL,
    subject VARCHAR(50) NOT NULL,
    language_image_path VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    project_path VARCHAR(255) NOT NULL
);
```

## 🔨 Développement

Pour le développement, les volumes Docker sont configurés pour refléter les changements en temps réel :

```yaml
volumes:
  - ./public:/var/www/html/public
  - ./src:/var/www/html/src
  - ./templates:/var/www/html/templates
```

## 🚀 Commandes utiles

```bash
# Démarrer l'application
docker compose up

# Démarrer l'application en arrière-plan
docker compose up -d

# Arrêter l'application
docker compose down

# Reconstruire les conteneurs
docker compose up --build

# Voir les logs
docker compose logs

# Accéder au conteneur PHP
docker compose exec web bash

# Accéder à la base de données
docker compose exec db psql -U postgres -d portfolio
```

## 📄 Licence

Distribué sous la licence MIT. Voir le fichier `LICENSE` pour plus d'informations.
```

Ce fichier README reflète désormais correctement votre portfolio et ses spécificités. 