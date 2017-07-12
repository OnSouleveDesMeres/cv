<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/07/17
 * Time: 18:07
 */

require_once 'myPDO.class.php';

class Work{

    protected $NOM = null;
    protected $LIEU = null;
    protected $CP = null;
    protected $DATEDEB = null;
    protected $DATEFIN = null;
    protected $FONCTION = null;
    protected $IDWORK = null;

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
    public function getFONCTION()
    {
        return $this->FONCTION;
    }

    /**
     * @return null
     */
    public function getIDWORK()
    {
        return $this->IDWORK;
    }

    /**
     * @return null
     */
    public function getLIEU()
    {
        return $this->LIEU;
    }

    /**
     * @return null
     */
    public function getNOM()
    {
        return $this->NOM;
    }


    public static function getAll(){

        $requete=<<<SQL
SELECT NOM, LIEU, CP, DATE_FORMAT(DATEFIN, '%m/%Y') AS "DATEFIN", DATEDEB, FONCTION, IDWORK
FROM work
ORDER BY DATEFIN DESC
SQL;

        $pdo = myPDO::getInstance()->prepare($requete);

        $pdo->setFetchMode(PDO::FETCH_CLASS, 'Work');
        $res = $pdo->execute(array());
        if($res){
            $datas = $pdo->fetchAll();
            return $datas;
        }
        else{
            throw new Exception('Erreur, impossible de récupérer les élèves');
        }

    }

}