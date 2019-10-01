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
    public static function create($mysqli, $assessmentid, $sid, $score, $grade){
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

    public static function getAll($mysqli)
    {

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

  public function getId(){
    return $this->sid;
  }
  
  public function getScore(){    
    return $this->score;
  }

  public function getGrade(){
    return $this->grade;
  }
}
?>