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
 * Inclui a classe abstrata EXT_Base_Element à página.
 * @static
 */
IbutExt::importar('base.EXT_Base_Element');

/**
 * Classe abstrata que contém os principais métodos para a manipulação de tags Html.
 * @author Mardone Dias de Oliveira
 * @link http://www.ibut.com.br
 * @package ibutext.base
 * @abstract
 */
class EXT_Base_Tag extends EXT_Base_Element {

    
    /**
     *Constroui uma tag Html
     * @param string $tag 
     */
    public function __construct($tag) {
        parent::__construct($tag);
    }

    /**
     * Define um valor para o atibuto "id" da tag Html.
     * @param string $id - Identificador da tag
     */
    public function setId($id) {
        $this->setAtributo('id',$id);
        return $this;
    }

    /**
     * Recupera o valor do atibuto "id" da tag html.
     * @return string 
     */
    public function getId() {
        return $this->getAtributo('id');
    }

    /**
     * Define um valor para o atibuto "class" da tag html.
     * @param string $classe - Valor para o atributo "class".
     */
    public function setClasse($classe) {
        $this->setAtributo('class',$classe);
        return $this;
    }

    /**
     * Recupera o valor do atibuto "class".
     * @return string 
     */
    public function getClasse() {
        return $this->getAtributo('class');
    }

    /**
     * Define um valor para o atributo "name" da tag Html.
     * @param string $nome Nome dado a tag.
     */
    public function setNome($nome) {
        $this->setAtributo('name',$nome);
        return $this;
    }
    
    /**
     * Recupera o valor do atibuto "name" da tag Html.
     * @return string 
     */
    public function getNome() {
        return $this->getAtributo('name');
    }



    /* 
     * Adiciona um elemento filho à tag Html.
     * @param string $elemento - Elemento filho.
     */
    public function add($elemento) {
        parent::add($elemento);
        return $this;
    }

    public function show() {
        parent::show();
    }

}

?>
