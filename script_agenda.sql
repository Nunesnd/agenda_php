-- Criação do banco de dados
CREATE DATABASE agenda;

-- Utilização do banco de dados
USE agenda;

-- Criação da tabela contacts
CREATE TABLE contacts (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(100),
	phone VARCHAR(20),
	email VARCHAR(30),
	observations TEXT
);

-- Inserção de dados de exemplo
INSERT INTO contacts (name, phone, email, observations)
VALUES
	('Aquiles', '11987654321', 'aquiles@gmail.com', 'Aquiles, herói grego da guerra de Troia, conhecido por sua coragem e força.'),
	('Heitor', '11998765432', 'heitor@hotmail.com', 'Heitor, príncipe troiano e guerreiro corajoso, filho do rei Príamo.'),
	('Odisseu', '11987651234', 'odisseu@yahoo.com', 'Odisseu, conhecido como Ulisses, rei de Ítaca e protagonista da Odisseia.'),
	('Agamêmnon', '11987652345', 'agamemnon@gmail.com', 'Agamêmnon, rei de Micenas, líder dos gregos na guerra de Troia.'),
	('Helena', '11987653456', 'helen@hotmail.com', 'Helena, esposa de Menelau e causa da guerra de Troia.'),
	('Páris', '11987654567', 'paris@yahoo.com', 'Páris, príncipe troiano, responsável por sequestrar Helena e iniciar a guerra.'),
	('Hécuba', '11987655678', 'hecuba@gmail.com', 'Hécuba, rainha de Troia, esposa de Príamo e mãe de Heitor e Páris.'),
	('Diomedes', '11987656789', 'diomedes@hotmail.com', 'Diomedes, guerreiro grego conhecido por sua bravura e habilidade na batalha.');

	-- Verificar os dados inseridos
SELECT * FROM contacts;