<?php

class Result{
    //Properties of the class
    private $id = null;
    private $sid="";
    private $assessmentid="";
    private $score=0;
    private $grade="";

    //constructor
    public function __construct($id,$sid,$assessmentid,$score,$grade)
    {
        $this->id = $id;
        $this->sid = $sid;
        $this->assessmentid = $assessmentid;
        $this->score=$score;
        $this->grade=$grade;
    }
    //helper methods
    public static function create($mysqli, $sid, $assessmentid,  $score, $grade){
        // create a new result record in results table and if successful 
        // create a result object and return it otherwise return false;
        $result = false;
        $sql = sprintf("insert into results(sid, assessmentid, score, grade) values('%s', '%s', '%s', '%s')", $sid, $assessmentid, $score, $grade);
        $qresult = $mysqli->query($sql);
        if ($qresult){
          $id = $mysqli->insert_id;
          $results = new Result($id,$sid, $assessmentid, $score, $grade);      
          $result = $results;
        }
        return $result;
    }

    public static function find($mysqli, $id)
    {

    }

    public static function getAll($mysqli,$sid)
    {
      $sql = "select * from results where SId=".$sid;
      $qresult = $mysqli->query($sql);    
      $results = false;
      if ($qresult){
        $results = new Collection();
        while($row = $qresult->fetch_assoc()){
          $result = new Result($row['Id'], $row['SId'], $row['AssessmentId'], $row['Score'], $row['Grade']);
          $results->Add($row['Id'], $result);      
        }    
      }
      return $results; 
    }

    // ------ setter methods -------
  public function setsId($sid){
    $this->$sid = $sid;
  }

  public function setAssessmentId($assessmentid){
    $result = true;
    if (is_string($assessmentid)){
      $this->assessmentid = $assessmentid;
    } else $result = false;
    return $result;
  }
  public function setMark($score){
    $this->$score = $score;
  }
  public function setGrade($grade){
    $this->$grade = $grade;
  }
  // ------- getter methods ----------
  public function getAssessmentId(){    
    return $this->assessmentid;
  }

  public function getSId(){    
    return $this->sid;
  }

  public function getId(){
    return $this->Id;
  }
  
  public function getScore(){    
    return $this->score;
  }

  public function getGrade(){
    return $this->grade;
  }
}
?>