<?php
/**
 * Created by PhpStorm.
 * User: mrlsoares
 * Date: 02/07/15
 * Time: 10:32
 */

namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Application\Entity\CategoriaRepository")
 * @ORM\Table(name="categoria")
 * Class Categoria
 * @package Application\Entity
 */
class Categoria
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	private $id;
	/**
	 	 * @ORM\Column(type="string")
	 	 */
	private $nome;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * @param mixed $nome
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;
	}

}