DROP TABLE IF EXISTS niveis_acessos;

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO niveis_acessos VALUES ("1","Administrador","2017-09-23 00:00:00",NULL);
INSERT INTO niveis_acessos VALUES ("2","Financeiro","2017-09-23 00:00:00",NULL);
INSERT INTO niveis_acessos VALUES ("3","Cliente","2017-09-23 00:00:00",NULL);
INSERT INTO niveis_acessos VALUES ("4","Suporte","2017-09-23 00:00:00",NULL);


DROP TABLE IF EXISTS situacaos;

CREATE TABLE `situacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO situacaos VALUES ("1","Ativo","2017-09-23 00:00:00",NULL);
INSERT INTO situacaos VALUES ("2","Inativo","2017-09-23 00:00:00",NULL);


DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) DEFAULT NULL,
  `email` varchar(220) NOT NULL,
  `situacao_id` int(11) NOT NULL DEFAULT '2',
  `niveis_acesso_id` int(11) NOT NULL,
  `qnt_acessos` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `situacao_id` (`situacao_id`),
  KEY `niveis_acesso_id` (`niveis_acesso_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacaos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`niveis_acesso_id`) REFERENCES `niveis_acessos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO usuarios VALUES ("1","Cesar","cesar@celke.com.br","1","1","15","2017-09-23 00:00:00",NULL);
INSERT INTO usuarios VALUES ("2","Kelly1","kelly@celke.com.br1","1","2","20","2017-09-23 00:00:00","2017-09-23 20:13:26");
INSERT INTO usuarios VALUES ("3","Jessica2","jessica@celke.com.br2","1","3","10","2017-09-23 00:00:00","2017-09-23 20:13:52");
INSERT INTO usuarios VALUES ("4","Ana","ana@celke.com.br","2","3","15","2017-09-23 00:00:00",NULL);


