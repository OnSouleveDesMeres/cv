<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/07/17
 * Time: 18:10
 */

require_once 'myPDO.class.php';

class Formation{

    protected $IDFORM = null;
    protected $NOM = null;
    protected $VILLE = null;
    protected $CP = null;
    protected $DATEDEB = null;
    protected $DATEFIN = null;
    protected $VALIDE = null;

    /**
     * @return null
     */
    public function getIDFORM()
    {
        return $this->IDFORM;
    }

    /**
     * @return null
     */
    public function getNOM()
    {
        return $this->NOM;
    }

    /**
     * @return null
     */
    public function getVILLE()
    {
        return $this->VILLE;
    }

    /**
     * @return null
     */
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * @return null
     */
    public function getDATEDEB()
    {
        return $this->DATEDEB;
    }

    /**
     * @return null
     */
    public function getDATEFIN()
    {
        return $this->DATEFIN;
    }

    /**
     * @return null
     */
    public function getVALIDE()
    {
        return $this->VALIDE;
    }



    public static function getAll(){

        $requete=<<<SQL
SELECT NOM, VILLE, CP, DATE_FORMAT(DATEFIN, '%m/%Y') AS "DATEFIN", DATEDEB, VALIDE, IDFORM
FROM FORMATION
ORDER BY IDFORM DESC
SQL;

        $pdo = myPDO::getInstance()->prepare($requete);

        $pdo->setFetchMode(PDO::FETCH_CLASS, 'Formation');

        $res = $pdo->execute(array());

        if($res){

            $datas = $pdo->fetchAll();
            return $datas;

        }
        else{
            throw new Exception('Erreur, impossible de trouver les formations');
        }

    }

}