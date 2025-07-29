CREATE DATABASE gestao_contratos DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE gestao_contratos;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE tokens_recuperacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    token VARCHAR(255) NOT NULL,
    expiracao DATETIME NOT NULL,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO usuarios (nome, email, senha)
VALUES ('Rebeca Vieira', 'rebecadasilva.v3@gmail.com', 
        '$2y$10$vG/TCwAjN5rCZbpFbCZKtu8b5zAVMqtzswk3pgU8FoZYaHHUwFSvi');
        
        
CREATE TABLE contratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    processo_administrativo VARCHAR(50) NOT NULL,
    nome_empresa VARCHAR(255) NOT NULL,
    servico TEXT NOT NULL,
    gestor_contrato VARCHAR(100),
    fiscal VARCHAR(100),
    fiscal_substituto VARCHAR(100),
    vigencia VARCHAR(100),
    informacoes TEXT,
    renovavel TINYINT(1) DEFAULT 0,
    status VARCHAR(50) DEFAULT 'ativo',
    numero_sei VARCHAR(100)
);

INSERT INTO contratos (processo_administrativo, nome_empresa, servico, gestor_contrato, fiscal, fiscal_substituto, vigencia, informacoes, status)
VALUES
('0140/2022', 'Braso Soluções Tecnológicas', 'Serviço de Mensageria via protocolo SMTP', 'Fabio', 'Alexandre', '', '28/11/2022 a 27/11/2025', 'Link', 'ativo'),
('058/2021', 'Ingram', 'Office 365', 'Alexandre', 'Pedro', '', '30/11/2021 à 01/12/2025', 'Link', 'ativo'),
('034/2021', 'Ark Tec', 'Guarda de documentos e fitas backup', 'Mhamad', 'Fábio', 'Fabiane', '10/12/2021 a 09/12/2025', 'Link', 'ativo'),
('059/2022', 'Infra do Brasil', 'E-mail marketing', '', 'Felipe', 'Alexandre Silva', '20/12/2022 a 20/12/2025', 'Link', 'ativo'),
('007/2024', 'Fibrion', '02 links de internet de 500 Mbs', 'Fábio', 'Alexandre Silva', '', '01/06/2024 a 21/08/2025', 'Link', 'ativo'),
('007/2024', 'Edson Rodrigo Mellado de Lima', '02 links de internet de 500 Mbs', 'Fábio', 'Alexandre Silva', '', '01/07/2024 a 31/08/2025', 'Link', 'ativo'),
('', 'Tim', '02 links de internet de 50 Mbs', 'Alexandre', 'Pedro', '', '08/01/2023 a 07/01/2025', 'Renovação de empenho deve ser enviada para contabilidade no final de cada ano', 'ativo'),
('080/2023', 'Tecnoset', 'Locação de impressoras', 'Mhamad', 'Victor', 'Almir', '22/12/2024 a 21/12/2025', 'Link', 'ativo'),
('147/2023', 'Latitude.sh', 'Serviços de hospedagem', 'Fábio', 'Alexandre Silva', '', '28/02/2025 a 28/02/2026', 'Link', 'ativo'),
('039/2022', 'Assisnet', 'Firewall', 'Fábio', 'Pedro', 'Alexandre Silva', '01/12/2022 a 30/11/2027', 'Link', 'ativo'),
('020/2022', 'Y3 Gestão', 'licenças de software/aplicativo para gerenciamento de dispositivos móveis (tablets)', 'Fabio', 'Robson Pecorari', 'Alexandre Silva', '01/09/2022 a 31/08/2025', 'Link', 'ativo'),
('034/2023', 'Nexus / Assisnet', 'Licenças de produtos dos fabricantes Symantec/Broadcom e Veritas Backup', 'Fabio', 'Pedro', 'Alexandre Silva', '20/08/2023 a 19/08/2026', 'Link', 'ativo'),
('044/2022', 'Horizon', 'Fábrica de software', 'Fabiane', '', 'Fabio', '16/01/2023 a 16/07/2025', 'Link', 'ativo'),
('55/2025', 'AOVS Sistemas de Informática', 'EAD Alura', 'Fábio', 'Pedro', 'Felipe', '01/07/2025 a 30/06/2026', 'Link', 'ativo'),
('029/2022', 'Tecnetworking Serviços', '04 licenças de uso do software Adobe Creative Cloud', 'Fabio', '', 'Mhamad', '10/09/2022 à 10/09/2025', 'Link', 'ativo'),
('104/2024', 'Licitapro', '2 licenças - Zoom Meeting Profissional', 'Mhamad', 'Mhamad', '', '25/10/2024 a 25/10/2025', 'Link', 'ativo'),
('0105/2024', 'Tubarão Software/Leni S Silva de Lucena - (Licença StreamYard)', 'Licença StreamYard', 'Mhamad', 'Mhamad', '', '21/10/2024 a 21/10/2025', 'Link', 'ativo'),
('38/2025', 'Operadora JRC Telecomunicações Ltda', 'PABX Virtual em Nuvem', '** Processo direcionado ao Suprimento para processo de pagamento ** Gestor: Fábio / Fiscal: Mhamad', '', '', '17/02/2025 a 16/02/2026', 'Link', 'ativo');


CREATE TABLE dominios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dominio VARCHAR(255) NOT NULL,
    data_expira DATE NOT NULL
);

INSERT INTO dominios (dominio, data_expira) VALUES
('amoserfarmaceutico.com.br', '2027-07-26'),
('congressocrf.org.br', '2027-09-12'),
('crfsp.far.br', '2029-10-07'),
('crfsp.org.br', '2029-01-08'),
('ensinocrf.org.br', '2027-08-10'),
('farmaceuticonet.com.br', '2027-08-13'),
('farmaceuticoonline.com.br', '2027-08-13'),
('farmaceuticoweb.com.br', '2027-08-13'),
('novafarmacia.com.br', '2027-08-25');

