<?php
/*
 * ibut-ext
 * https://github.com/mardonedias/ibut-ext
 * Copyright 2011 Mardone Dias
 *
 * Este arquivo é parte da biblioteca ibut-ext
 *
 * ibut-ext é um software livre; você pode redistribui-lo e/ou
 * modifica-lo dentro dos termos da Licença Pública Geral GNU como
 * publicada pela Fundação do Software Livre (FSF); na versão 3 da
 * Licença, ou (na sua opnião) qualquer versão.
 *
 * Esta biblioteca é distribuida na esperança que possa ser  util,
 * mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUAÇÂO a qualquer
 * MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU para maiores detalhes.
 *
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU
 * junto com este programa, se não, acesse http://www.gnu.org/copyleft/gpl.txt
 */


/**
 * Inclui a classe abstrata Tag a página.
 * @static
 */
//IbutExt::importar('base.EXT_Base_Tag');

/**
 * Classe para manipulação do elemento <div>; <br/>
 * Define uma divisão ou uma seção em um documento HTML. <br/>
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext.tag
 */
class EXT_Tag_Imagem extends EXT_Base_Tag {

    public function __construct() {
        parent::__construct('IMG');
        parent::eUnica(true, false);
        
    }
    
    
    public function setEndereco($endereco){
        $this->src=$endereco;
    }

    public function setAlt($alt){
        $this->alt=$alt;
    }

    public function setTitulo($titulo){
        $this->title=$titulo;
    }

    public function show(){
        $this->tagUnica(true, false);
        parent::show();
    }
    
}

?>