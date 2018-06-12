
CREATE TABLE IF NOT EXISTS `candidato` (
  idCandidato INT NOT NULL AUTO_INCREMENT,
  nomeCandidato VARCHAR(45) NOT NULL,
  descriCandidato VARCHAR(250) NOT NULL,
  caminhoImagem VARCHAR(255) NULL,
  PRIMARY KEY (idCandidato),
  UNIQUE INDEX idCandidato_UNIQUE (idCandidato ASC))
ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `voto` (
  idCandidato INT NOT NULL,
  qtd_voto INT NULL,
  INDEX fk_table1_Candidato_idx (idCandidato ASC),
  PRIMARY KEY (idCandidato),
  CONSTRAINT fk_table1_Candidato
    FOREIGN KEY (idCandidato)
    REFERENCES `Candidato` (idCandidato)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

