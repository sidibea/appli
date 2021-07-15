<?php

namespace NB\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="NB\CoreBundle\Repository\BienRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Bien
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Plusieurs biens peuvent appartenir à un propriétaire.
     * @ORM\ManyToOne(targetEntity="Agent")
     */
    private $proprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", nullable=true, length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type_de_bien", type="string", length=255, nullable=true)
     */
    private $typeDeBien;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=255, nullable=true)
     */
    private $quartier;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255, unique=true)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="batiment", type="string", length=255, nullable=true)
     */
    private $batiment;

    /**
     * @var string
     *
     * @ORM\Column(name="escalier", type="string", length=255, nullable=true)
     */
    private $escalier;

    /**
     * @var string
     *
     * @ORM\Column(name="etage", type="string", length=255, nullable=true)
     */
    private $etage;

    /**
     * @var string
     *
     * @ORM\Column(name="num_porte", type="string", length=255, nullable=true)
     */
    private $numPorte;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=255, nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie", type="string", length=255, nullable=true)
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="nbre_de_piece", type="string", length=255, nullable=true)
     */
    private $nbreDePiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nbre_de_chambre", type="string", length=255, nullable=true)
     */
    private $nbreDeChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="annee_de_construction", type="string", length=255, nullable=true)
     */
    private $anneeDeConstruction;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="type_de_location_propose", type="string", length=255, nullable=true)
     */
    private $typeDeLocationPropose;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_minimale_de_location", type="integer", nullable=true)
     */
    private $dureeMinimaleDeLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="loyer_hc", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $loyerHc;

    /**
     * @var string
     *
     * @ORM\Column(name="charge", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $charge;

    /**
     * @var string
     *
     * @ORM\Column(name="type_habitat", type="string", length=255, nullable=true)
     */
    private $typeHabitat;

    /**
     * @var string
     *
     * @ORM\Column(name="regime_juridique", type="string", length=255, nullable=true)
     */
    private $regimeJuridique;

    /**
     * @ORM\ManyToMany(targetEntity="DesignationPartie", cascade={"persist", "remove"})
     */
    private $designationsDesParties;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_du_centre_impot", type="string", length=255, nullable=true)
     */
    private $nomDuCentreImpot;

    /**
     * @var string
     *
     * @ORM\Column(name="adresses", type="string", length=255, nullable=true)
     */
    private $adresses;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="date")
     */
    private $updateAt;









    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPhotoFile()
    {
        return $this->photoFile;
    }



    /**
     * Sets the value of profile_picture_file.
     *
     * @return self
     */
    public function setPhotoFile(File $photoFile)
    {
        $this->photoFile = $photoFile;

        // Only change the updated af if the file is really uploaded to avoid database updates.
        // This is needed when the file should be set when loading the entity.
        if ($this->photoFile instanceof UploadedFile) {
            $this->setUpdateAt(new Carbon());
        }

        return $this;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Bien
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set typeDeBien
     *
     * @param string $typeDeBien
     *
     * @return Bien
     */
    public function setTypeDeBien($typeDeBien)
    {
        $this->typeDeBien = $typeDeBien;

        return $this;
    }

    /**
     * Get typeDeBien
     *
     * @return string
     */
    public function getTypeDeBien()
    {
        return $this->typeDeBien;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     *
     * @return Bien
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Bien
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set batiment
     *
     * @param string $batiment
     *
     * @return Bien
     */
    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get batiment
     *
     * @return string
     */
    public function getBatiment()
    {
        return $this->batiment;
    }

    /**
     * @return mixed
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * @param mixed $proprietaire
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
    }



    /**
     * Set escalier
     *
     * @param string $escalier
     *
     * @return Bien
     */
    public function setEscalier($escalier)
    {
        $this->escalier = $escalier;

        return $this;
    }

    /**
     * Get escalier
     *
     * @return string
     */
    public function getEscalier()
    {
        return $this->escalier;
    }

    /**
     * Set etage
     *
     * @param string $etage
     *
     * @return Bien
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return string
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set numPorte
     *
     * @param string $numPorte
     *
     * @return Bien
     */
    public function setNumPorte($numPorte)
    {
        $this->numPorte = $numPorte;

        return $this;
    }

    /**
     * Get numPorte
     *
     * @return string
     */
    public function getNumPorte()
    {
        return $this->numPorte;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Bien
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Bien
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set superficie
     *
     * @param string $superficie
     *
     * @return Bien
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return string
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set nbreDePiece
     *
     * @param string $nbreDePiece
     *
     * @return Bien
     */
    public function setNbreDePiece($nbreDePiece)
    {
        $this->nbreDePiece = $nbreDePiece;

        return $this;
    }

    /**
     * Get nbreDePiece
     *
     * @return string
     */
    public function getNbreDePiece()
    {
        return $this->nbreDePiece;
    }

    /**
     * Set nbreDeChambre
     *
     * @param string $nbreDeChambre
     *
     * @return Bien
     */
    public function setNbreDeChambre($nbreDeChambre)
    {
        $this->nbreDeChambre = $nbreDeChambre;

        return $this;
    }

    /**
     * Get nbreDeChambre
     *
     * @return string
     */
    public function getNbreDeChambre()
    {
        return $this->nbreDeChambre;
    }

    /**
     * Set anneeDeConstruction
     *
     * @param string $anneeDeConstruction
     *
     * @return Bien
     */
    public function setAnneeDeConstruction($anneeDeConstruction)
    {
        $this->anneeDeConstruction = $anneeDeConstruction;

        return $this;
    }

    /**
     * Get anneeDeConstruction
     *
     * @return string
     */
    public function getAnneeDeConstruction()
    {
        return $this->anneeDeConstruction;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Bien
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set typeDeLocationPropose
     *
     * @param string $typeDeLocationPropose
     *
     * @return Bien
     */
    public function setTypeDeLocationPropose($typeDeLocationPropose)
    {
        $this->typeDeLocationPropose = $typeDeLocationPropose;

        return $this;
    }

    /**
     * Get typeDeLocationPropose
     *
     * @return string
     */
    public function getTypeDeLocationPropose()
    {
        return $this->typeDeLocationPropose;
    }

    /**
     * Set dureeMinimaleDeLocation
     *
     * @param integer $dureeMinimaleDeLocation
     *
     * @return Bien
     */
    public function setDureeMinimaleDeLocation($dureeMinimaleDeLocation)
    {
        $this->dureeMinimaleDeLocation = $dureeMinimaleDeLocation;

        return $this;
    }

    /**
     * Get dureeMinimaleDeLocation
     *
     * @return int
     */
    public function getDureeMinimaleDeLocation()
    {
        return $this->dureeMinimaleDeLocation;
    }

    /**
     * Set loyerHc
     *
     * @param string $loyerHc
     *
     * @return Bien
     */
    public function setLoyerHc($loyerHc)
    {
        $this->loyerHc = $loyerHc;

        return $this;
    }

    /**
     * Get loyerHc
     *
     * @return string
     */
    public function getLoyerHc()
    {
        return $this->loyerHc;
    }

    /**
     * Set charge
     *
     * @param string $charge
     *
     * @return Bien
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return string
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set typeHabitat
     *
     * @param string $typeHabitat
     *
     * @return Bien
     */
    public function setTypeHabitat($typeHabitat)
    {
        $this->typeHabitat = $typeHabitat;

        return $this;
    }

    /**
     * Get typeHabitat
     *
     * @return string
     */
    public function getTypeHabitat()
    {
        return $this->typeHabitat;
    }

    /**
     * Set regimeJuridique
     *
     * @param string $regimeJuridique
     *
     * @return Bien
     */
    public function setRegimeJuridique($regimeJuridique)
    {
        $this->regimeJuridique = $regimeJuridique;

        return $this;
    }

    /**
     * Get regimeJuridique
     *
     * @return string
     */
    public function getRegimeJuridique()
    {
        return $this->regimeJuridique;
    }

    /**
     * Set designationsDesParties
     *
     * @param string $designationsDesParties
     *
     * @return Bien
     */
    public function setDesignationsDesParties($designationsDesParties)
    {
        $this->designationsDesParties = $designationsDesParties;

        return $this;
    }

    /**
     * Get designationsDesParties
     *
     * @return string
     */
    public function getDesignationsDesParties()
    {
        return $this->designationsDesParties;
    }

    /**
     * Set nomDuCentreImpot
     *
     * @param string $nomDuCentreImpot
     *
     * @return Bien
     */
    public function setNomDuCentreImpot($nomDuCentreImpot)
    {
        $this->nomDuCentreImpot = $nomDuCentreImpot;

        return $this;
    }

    /**
     * Get nomDuCentreImpot
     *
     * @return string
     */
    public function getNomDuCentreImpot()
    {
        return $this->nomDuCentreImpot;
    }

    /**
     * Set adresses
     *
     * @param string $adresses
     *
     * @return Bien
     */
    public function setAdresses($adresses)
    {
        $this->adresses = $adresses;

        return $this;
    }

    /**
     * Get adresses
     *
     * @return string
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Bien
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     *
     * @return Bien
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Bien
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set ville1
     *
     * @param string $ville1
     *
     * @return Bien
     */
    public function setVille1($ville1)
    {
        $this->ville1 = $ville1;

        return $this;
    }

    /**
     * Get ville1
     *
     * @return string
     */
    public function getVille1()
    {
        return $this->ville1;
    }

    /**
     * @return string
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * @param string $quartier
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;
    }


}
