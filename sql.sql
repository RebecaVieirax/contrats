instrumentosCREATE TABLE instrumentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_processo VARCHAR(100) NOT NULL,
    objetivo_contrato TEXT,
    crt_ata VARCHAR(100),
    empresa_contratada VARCHAR(255),
    cpf_cnpj VARCHAR(25),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO instrumentos (numero_processo, objetivo_contrato, crt_ata, empresa_contratada, cpf_cnpj) VALUES
('107/2023\nCRFSP24.6.000000810-9', 'Aquisição, sob demanda, de café, açúcar, adoçante e água para o CRF-SP.', '0038/2023', 'THHD COMERCIAL LTDA.', '50.076.064/0001-44'),
('008/2022\nCRFSP24.6.000000789-7', 'Locação de veículos para o CRF-SP', '0006/2022', 'CS BRASIL FROTAS LTDA', '27.595.780/001-16'),
('088/2019\nCRFSP24.6.000000805-2', 'Gerenciamento do abastecimento de combustíveis e lavagens', '0060/2019', 'TRIVALE ADMINISTRAÇÃO LTDA', '00.604.122/0001-97'),
('080/2023\nCRFSP24.6.000000819-2', 'Prestação de serviços para fornecimento de solução de impressão departamental', '0035/2023', 'TECNOSET INFORMATICA PRODUTOS E SERVICOS LTDA', '64.799.539/0001-35');
INSERT INTO instrumentos (numero_processo, objetivo_contrato, crt_ata, empresa_contratada, cpf_cnpj) VALUES
('052/2019\nCRFSP24.6.000000815-0', 'Impressão, manuseio e postagem de correspondências', '0018/2019', 'VARILOG SERVIÇOS IMPRESSÃO E LOGÍSTICA EIRELI / REMESSA: MALA DIRETA POSTAL LTDA', '18.172.801/0001-08'),
('032/2022\nCRFSP24.6.000000816-8', 'Manutenção e recarga de extintores', '0044/2022', 'FAVERO E ESTEVES EQUIPAMENTOS DE SEGURANÇA LTDA - ME', '06.193.748/0001-34'),
('095/2018\nCRFSP24.6.000000888-5', 'Manutenção do sistema de telefonia fixa da Sede (PABX)', '0001/2019', 'RODRIGUES CRUZ TELECOMUNIC & ELETRICIDADE LTDA EPP', '61.836.565/0001-06'),
('PCS.197/2022\nCRFSP24.6.000000061-2', 'Manutenção de sistemas implanta', '0014/2023', 'IMPLANTA INFORMÁTICA LTDA', '37.994.043/0001-40');
INSERT INTO instrumentos (numero_processo, objetivo_contrato, crt_ata, empresa_contratada, cpf_cnpj) VALUES
('044/2022\nCRFSP24.6.000000821-4', 'Fábrica de software', '0001/2023', 'HORIZON INOVAÇÃO E TECNOLOGIA LTDA', '14.497.724/0001-05'),
('020/2022\nCRFSP24.6.000000812-5', 'Software/aplicativo para gerenciamento de dispositivos móveis (tablets)', '0013/2022', 'Y3 GESTAO EM TELECOM E COMERCIO DE EQUIPAMENTOS LTDA', '15.627.790/0001-07'),
('029/2022\nCRFSP24.6.000000806-0', 'Adobe creative cloud - 36 meses', 'OS.046/2022', 'TECNETWORKING SERVIÇOS E SOLUÇÕES EM TI LTDA', '21.748.841/0001-51'),
('026/2022\nCRFSP24.6.000000807-9', 'Assistência Odontológica', '0015/2022', 'INSTITUTO DE PREVIDÊNCIA E ASSISTÊNCIA ODONTOLÓGICA LTDA. (INPAO)', '00.856.424/0001-52'),
('059/2022\nCRFSP24.6.000000817-6', 'E-mail marketing', '0043/2022', 'INFRA DO BRASIL COMÉRCIO E SERVIÇOS EIRELI', '70.946.330/0001-50'),
('046/2021\nCRFSP24.6.000000811-7', 'Fornecimento de energia elétrica para Seccional de Bragança', '0017/2021', 'ENERGISA SUL-SUDESTE - DISTRIBUIDORA DE ENERGIA S/A', '07.282.377/0001-20');
INSERT INTO instrumentos (numero_processo, objetivo_contrato, crt_ata, empresa_contratada, cpf_cnpj) VALUES
('017/2019\nCRFSP24.6.000000808-7', 'Fornecimento de energia elétrica para Seccional de Franca', '0037/2019', 'CPFL - COMPANHIA PAULISTA DE FORÇA E LUZ', '33.050.196/0001-88'),
('061/2024\nCRFSP24.6.000000813-3', 'Publicidade legal no DOU', '0020/2024', 'IMPRENSA NACIONAL', '04.196.645/0001-00'),
('089/2023\nCRFSP24.6.000000871-0', 'Contratação de Estacionamento para fornecimento de selos de estacionamento', '0024/2023', 'ESTACIONAMENTO FLOR DE LIS LTDA', '69.260.123/0001-68'),
('034/2020\nCRFSP24.6.000000848-6', 'Limpeza, copa, controle de acesso, recepção e zeladoria', '0022/2020', 'RIO MINAS CONSERVACAO E LIMPEZA EIRELI - EPP', '12.904.815/0001-84'),
('114/2023\nCRFSP24.6.000000840-0', 'Assistência Médica', '0039/2023', 'UNIMED NACIONAL – COOPERATIVA CENTRAL', '02.812.468/0001-06'),
('059/2021\nCRFSP24.6.000000688-2', 'Agência de viagens (Passagens Aéreas) Vol I , II e III', '0029/2021', 'ORLEANS VIAGENS E TURISMO LTDA', '21.331.404/0001-38');
INSERT INTO instrumentos (numero_processo, objetivo_contrato, crt_ata, empresa_contratada, cpf_cnpj) VALUES
('034/2021\nCRFSP24.6.000000515-0', 'Guarda de Documentos e Fitas de Backup', '0021/2021', 'ARK TEC GUARDA DE DOCUMENTOS S/A', '65.689.895/0001-69'),
('065/2020\nCRFSP24.6.000000820-6', 'Prestação de Serviços e venda de produtos EBCT', '0031/2020', 'EMPRESA BRASILEIRA DE CORREIOS E TELÉGRAFOS', '34.028.316/0031-29'),
('146/2023\nCRFSP24.6.000000834-6', 'Contratação de serviços de mailing de imprensa para o CRF-SP.', '0041/2023', 'IMAX TECNOLOGIA DE COMUNICAÇÃO LTDA.', '32.271.161/0001-06'),
('037/2020\nCRFSP24.6.000000827-3', 'Dedetização e controle de pragas para Sede e Seccionais', '0028/2020', 'RP DESENTUPIDORA E SERVIÇOS TÉCNICOS EIRELI', '29.161.710/0001-85'),
('009/2020\nCRFSP24.6.000000849-4', 'Defesa junto ao STF em 5 (cinco) recursos  para o CRF-SP', '0002/2020', 'AYRES BRITTO SOCIEDADE DE ADVOGADOS', '22.030.158/0001-47'),
('019/2024\nCRFSP24.6.000000850-8', 'Leitura e busca de publicações judiciais em nome do CRF-SP nos diários oficiais', '0005/2024', 'WEBJUR PROCESSAMENTO DE DADOS LTDA.', '09.400.465/0001-04'),
('155/2023\nCRFSP24.6.000000851-6', 'Vale transporte', '0004/2024', 'NET BENEFICIOS LTDA', '25.136.184/0001-42'),
('084/2021\nCRFSP24.6.000000828-1', 'Vale refeição', '0004/2022', 'VR BENEFÍCIOS E SERVIÇOS DE PROCESSAMENTO LTDA', '02.535.864/0001-33');
INSERT INTO instrumentos (numero_processo, objetivo_contrato, crt_ata, empresa_contratada, cpf_cnpj) VALUES
('060/2020\nCRFSP24.6.000000829-0', 'Vale alimentação', '0005/2021', 'VR BENEFÍCIOS E SERVIÇOS DE PROCESSAMENTO LTDA', '02.535.864/0001-33'),
('010/2022\nCRFSP24.6.000000836-2', 'Treinamento EAD através da plataforma Alura para o DTI (12 licenças anuais)', 'OS.018/2022 OS.016/2023 OS.011/2024', 'AOVS SISTEMAS DE INFORMÁTICA S/A', '05.555.382/0001-33'),
('027/2024\nCRFSP24.6.000000852-4', 'Banco de imagens e vídeos', '0012/2024', 'R.M AUAR VIDEO TECH', '26.339.308/0001-50'),
('023/2024\nCRFSP24.6.000000853-2', 'Serviços de telefonia móvel comutada (STFC)', '0011/2024', 'VERBIO TELECOM LTDA', '39.669.334/0001-98'),
('007/2022\nCRFSP24.6.000000854-0', 'Manutenção de ares condicionados (sede)', '0007/2022', 'SINERGIA PAULISTANA CONSTRUÇÕES E MONTAGENS LTDA', '08.390.028/0001-97'),
('018/2024\nCRFSP24.6.000000855-9', 'Transporte indivisual de passageiros', '0014/2024', 'COOPERATIVA UNIÃO DE SERVIÇOS DOS TAXISTAS AUTÔNOMOS DE SÃO PAULO (USETÁXI)', '59.558.411/0001-40'),
('011/2020\nCRFSP24.6.000000830-3', 'Manutenção de ares condicionados (seccionais)', '0010/2020', 'C M PINGO AR CONDICIONADO ME', '18.730.007/0001-24'),
('037/2024\nCRFSP24.6.000001018-9', 'Contratação de serviços e manutenção e suporte técnico para o adequado uso dos seguintes softwares - Portal Corpore RM, RM Chronus, RM Vitae, RM Labore e analista de suporte RH RM, nas condições estabelecidas no Termo de Referência.', '0018/2024', 'TOTVS S/A', '53.113.791/0012-85');
INSERT INTO instrumentos (numero_processo, objetivo_contrato, crt_ata, empresa_contratada, cpf_cnpj) VALUES
('018/2021\nCRFSP24.6.000000857-5', 'Telefonia móvel (SMP)', '0011/2021', 'TIM S/A', '02.421.421/0001-11'),
('044/2024\nCRFSP24.6.000000859-1', 'Agente de Integração de Estágio', '0021/2024', 'ASSOCIAÇÃO DE ENSINO SOCIAL PROFISSIONALIZANTE (ESPRO)', '51.549.301/0001-00'),
('016/2024\nCRFSP24.6.000000860-5', 'Serviço de coleta, transporte, tratamento e destinação final de resíduos sólidos de classe 2', '0007/2024', 'ECO BRASIL RESÍDUOS LTDA', '42.171.284/0001-29'),
('057/2024\nCRFSP24.6.000000861-3', 'Locação de veículos para o CRF-SP', '0023/2024', 'USECAR LOCADORA DE VEICULOS S/A', '02.274.615/0001-31'),
('007/2024\nCRFSP24.6.000000864-8', 'Serviços de links de acesso à internet, incluindo circuitos de comunicação de dados, gerenciamento e proteção contra ataques de negação de serviços – DDoS', '0009/2024', 'FIBRION INTERNET LTDA', '46.713.124/0001-15'),
('007/2024\nCRFSP24.6.000000949-0', 'Serviços de links de acesso à internet, incluindo circuitos de comunicação de dados, gerenciamento e proteção contra ataques de negação de serviços – DDoS', '0010/2024', 'EDSON RODRIGO MELLADO DE LIMA', '29.605.329/0001-68'),
('021/2021\nCRFSP24.6.000000831-1', 'Pedágio Eletrônico', '0010/2021', 'GIMAVE MEIOS DE PAGAMENTO LTDA', '05.989.476/0003-82'),
('098/2023\nCRFSP24.6.000000824-9', 'Serviço de Higienização de Purificadores para o CRF-SP', '0026/2023', 'MIN''AGUA COMERCIAL E DISTRIBUIDORA LTDA', '02.235.214/0001-72'),
('060/2024\nCRFSP24.6.000000842-7', 'Medicina do Trabalho', '0025/2024', 'PROSEG ENGENHARIA DE SEGURANÇA DO TRABALHO', '20.749.430/0001-18'),
('PCS.0140/2022\nCRFSP24.6.000000832-0', 'Contratação de serviços de mensageria via protocolo SMTP para o CRF-SP', '0020/2022', 'BRASO SOLUÇÕES TECNOLÓGICAS LIMITADA', '15.664.759/0001-46'),
('058/2021\nCRFSP24.6.000000837-0', 'Licenciamento Microsoft Office 365', 'OS.0053/2021 OS.0076/2022 OS.0042/2023 OS.0034/2024', 'INGRAM MICRO BRASIL LTDA', '01.771.935/0002-15');
INSERT INTO instrumentos (numero_processo, objetivo_contrato, crt_ata, empresa_contratada, cpf_cnpj) VALUES
('070/2024\nCRFSP24.6.000000865-6', 'Licença do Software Avaliação de Desempenho (Galera App)', '0027/2024', 'LEME CONSULTORIA EM GESTAO DE RH LTDA.', '07.955.535/0001-65'),
('072/2023\nCRFSP24.6.000000833-8', 'Manutenção preventiva e corretiva de 2 (dois) elevadores instalados no edifício sede', '0032/2023', 'VIKS ELEVADORES LTDA', '35.164.244/0001-94'),
('030/2024\nCRFSP24.6.000000866-4', 'Fornecimento de energia elétrica para a nova Seccional do CRF-SP em Piracicaba', '0015/2024', 'CPFL - COMPANHIA PAULISTA DE FORÇA E LUZ', '33.050.196/0001-88'),gestao_contratos
('147/2023 / CRFSP24.6.000000822-2', 'Prestação de serviços de hospedagem de conteúdo, na modalidade Cloud Computing', '0001/2024', 'Latitude.SH Ltda', '06.043.809/0001-87'),
('039/2022 / CRFSP24.6.000000841-9', 'Segurança e controle de acesso a rede de computadores através de appliance de controle unificado (firewall)', '0021/2022', 'Assisnet Serviços de Informática Ltda', '73.558.934/0001-17'),
('033/2024 / CRFSP24.6.000011760-9', 'Aquisição de 60 Fitas de Backup LTO 8 / Aquisição de 60 Etiquetas código de barras para Fitas de backup LTO8', '033/2024', 'J & K Comercial Ltda', '04.338.231/0001-60'),
('90034/2024 / CRFSP24.6.000000867-9', 'Aquisição por dispensa de licitação de 205 headsets monoauriculares para utilização em sistema Voip na sede e seccionais do CRF-SP.', '027/2024', 'Eunice de Oliveira Rodrigues dos Santos', '18.791.300/0001-00'),
('90025/2024 / CRFSP24.6.000000739-0', 'Operadora JRC Telecomunicações Ltda', '38/2025', 'Operadora JRC Telecomunicações Ltda', '29.597.360/0001-02');
