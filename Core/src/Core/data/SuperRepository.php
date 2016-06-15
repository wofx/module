<?php
namespace Core\data;

use Doctrine\ORM\EntityRepository;

class SuperRepository extends EntityRepository
{

    /**
     *
     * {@inheritdoc}
     *
     * @see \Apcap\Core\SuperRepository::salvar()
     */
    public function salvar($entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();
        return $entity;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Apcap\Core\SuperRepository::editar()
     */
    public function editar($entity)
    {
        $this->_em->merge($entity);
        $this->_em->flush();
        return $entity;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \Apcap\Core\SuperRepository::deletar()
     */
    public function deletar($entity)
    {
        $this->_em->remove($entity);
        $this->_em->flush();
    }   
}

