use team_mk;
INSERT INTO users (name, cpf, cargo, setor, classificacao, password)
VALUES
('Nome1', '12345678901', 'Cargo1', 'Setor1', 'A', 'senha1'),
('Nome2', '23456789012', 'Cargo2', 'Setor2', 'B', 'senha2'),
('Nome3', '34567890123', 'Cargo3', 'Setor3', 'C', 'senha3');
INSERT INTO solicitacoes (colab_id, solicitador_id, classification, description, notes)
VALUES
(1, 2, 'A', 'Descrição da solicitação 1', 'Notas da solicitação 1'),
(2, 3, 'B', 'Descrição da solicitação 2', 'Notas da solicitação 2'),
(3, 1, 'C', 'Descrição da solicitação 3', 'Notas da solicitação 3');
