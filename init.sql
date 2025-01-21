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


INSERT INTO technologies (name, level, image_path) 
VALUES
('HTML', 'Avancé', 'images/1051277.png'),
('CSS', 'Avancé','images/732190.png'),
('PHP', 'Intermédiaire', 'images/php.svg'),
('Javascript', 'Intermédiaire', 'images/javascript_original_logo_icon_146455.png'),
('Alpine.js', 'Intermédiaire', 'images/Alpine.js.svg'),
('Vue.js', 'Apprentissage', 'images/Vue.js.svg'),
('Three.js', 'Intermédiaire', 'images/Three.js.svg'),
('Symfony', 'Intermédiaire', 'images/Symfony.svg'),
('C', 'Intermédiaire', 'images/695px-C_Programming_Language.svg.png'),
('Java', 'Intermédiaire', 'images/java.svg'),
('Python', 'Intermédiaire', 'images/Python-logo-notext.svg.png'),
('NodeJS', 'Apprentissage', 'images/free-node-js-1174925.png'),
('SQL', 'Avancé', 'images/sql-database-generic.svg'),
('PostgreSQL', 'Intermédiaire', 'images/PostgresSQL.svg'),
('Kotlin', 'Apprentissage', 'images/Kotlin.svg'),
('Angular', 'Débutant', 'images/Angular.svg'),
('Typescript', 'Débutant', 'images/TypeScript.svg')
ON CONFLICT (name) DO NOTHING;

INSERT INTO tools (name, service, image_path)
VALUES 
('Git', 'Gestion de versions', 'images/Git_icon.svg.png'),
('Github', 'Hébergeur', 'images/github.256x249.png'),
('MySQL', 'Base de données', 'images/mysql.svg'),
('PgAdmin', 'Base de données', 'images/PostgresSQL.svg'),
('Docker', ' Conteneurs logiciels', 'images/docker.svg'),
('Figma', 'Design UI', 'images/figma.svg'),
('Google Cloud', 'Services cloud', 'images/Google Cloud.svg'),
('IntelliJ IDEA', 'IDE', 'images/IntelliJ.png'),
('VS Code', 'Editeur de code', 'images/vscode.png')
ON CONFLICT (name) DO NOTHING;
