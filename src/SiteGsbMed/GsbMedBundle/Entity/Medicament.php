<?php

namespace SiteGsbMed\GsbMedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="gsb_medicament")
 * @ORM\Entity(repositoryClass="SiteGsbMed\GsbMedBundle\Entity\MedicamentRepository")
 */
class Medicament
{
    /**
     * @ORM\OneToMany(targetEntity="SiteGsbMed\GsbMedBundle\Entity\Famille", mappedBy="gsb_medicament")
     */
    private $famille;
    
    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity ="SiteGsbMed\GsbMedBundle\Entity\Composition", cascade={"persist"})
     */
    private $composition;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_DepotLegal", type="string", length=50)
     */
    private $mEDDepotLegal;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_Nomcommercial", type="string", length=50)
     */
    private $mEDNomcommercial;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_Effets", type="string", length=100)
     */
    private $mEDEffets;

    /**
     * @var string
     *
     * @ORM\Column(name="MED_ContreIndication", type="text")
     */
    private $mEDContreIndication;

    /**
     * @var float
     *
     * @ORM\Column(name="MED_PrixEchantillon", type="float")
     */
    private $mEDPrixEchantillon;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mEDDepotLegal
     *
     * @param string $mEDDepotLegal
     * @return Medicament
     */
    public function setMEDDepotLegal($mEDDepotLegal)
    {
        $this->mEDDepotLegal = $mEDDepotLegal;
    
        return $this;
    }

    /**
     * Get mEDDepotLegal
     *
     * @return string 
     */
    public function getMEDDepotLegal()
    {
        return $this->mEDDepotLegal;
    }

    /**
     * Set mEDNomcommercial
     *
     * @param string $mEDNomcommercial
     * @return Medicament
     */
    public function setMEDNomcommercial($mEDNomcommercial)
    {
        $this->mEDNomcommercial = $mEDNomcommercial;
    
        return $this;
    }

    /**
     * Get mEDNomcommercial
     *
     * @return string 
     */
    public function getMEDNomcommercial()
    {
        return $this->mEDNomcommercial;
    }

    /**
     * Set mEDEffets
     *
     * @param string $mEDEffets
     * @return Medicament
     */
    public function setMEDEffets($mEDEffets)
    {
        $this->mEDEffets = $mEDEffets;
    
        return $this;
    }

    /**
     * Get mEDEffets
     *
     * @return string 
     */
    public function getMEDEffets()
    {
        return $this->mEDEffets;
    }

    /**
     * Set mEDContreIndication
     *
     * @param string $mEDContreIndication
     * @return Medicament
     */
    public function setMEDContreIndication($mEDContreIndication)
    {
        $this->mEDContreIndication = $mEDContreIndication;
    
        return $this;
    }

    /**
     * Get mEDContreIndication
     *
     * @return string 
     */
    public function getMEDContreIndication()
    {
        return $this->mEDContreIndication;
    }

    /**
     * Set mEDPrixEchantillon
     *
     * @param float $mEDPrixEchantillon
     * @return Medicament
     */
    public function setMEDPrixEchantillon($mEDPrixEchantillon)
    {
        $this->mEDPrixEchantillon = $mEDPrixEchantillon;
    
        return $this;
    }

    /**
     * Get mEDPrixEchantillon
     *
     * @return float 
     */
    public function getMEDPrixEchantillon()
    {
        return $this->mEDPrixEchantillon;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->famille = new \Doctrine\Common\Collections\ArrayCollection();
        $this->composition = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add famille
     *
     * @param \SiteGsbMed\GsbMedBundle\Entity\Famille $famille
     * @return Medicament
     */
    public function addFamille(\SiteGsbMed\GsbMedBundle\Entity\Famille $famille)
    {
        $this->famille[] = $famille;
    
        return $this;
    }

    /**
     * Remove famille
     *
     * @param \SiteGsbMed\GsbMedBundle\Entity\Famille $famille
     */
    public function removeFamille(\SiteGsbMed\GsbMedBundle\Entity\Famille $famille)
    {
        $this->famille->removeElement($famille);
    }

    /**
     * Get famille
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Add composition
     *
     * @param \SiteGsbMed\GsbMedBundle\Entity\Composition $composition
     * @return Medicament
     */
    public function addComposition(\SiteGsbMed\GsbMedBundle\Entity\Composition $composition)
    {
        $this->composition[] = $composition;
    
        return $this;
    }

    /**
     * Remove composition
     *
     * @param \SiteGsbMed\GsbMedBundle\Entity\Composition $composition
     */
    public function removeComposition(\SiteGsbMed\GsbMedBundle\Entity\Composition $composition)
    {
        $this->composition->removeElement($composition);
    }

    /**
     * Get composition
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComposition()
    {
        return $this->composition;
    }
}