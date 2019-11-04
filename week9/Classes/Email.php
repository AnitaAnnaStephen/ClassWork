<?php  
  class Email{

    //Properties of Email class
    private $sender=null;
    private $recipients=null;
    private $subject=null;
    private $text=null;

    //Constructor for Email class
    public function __construct($sender,$recipients,$subject,$text){
       $this->sender=$sender; 
       $this->recipients=$recipients;
       $this->subject=$subject;
       $this->text=$text;
    }

    //Function to display email as html
    public static function displayEmail($sender,$recipients,$subject,$text)
    {
        echo '<html>';
        echo '<body>';
        echo '<div>';
        echo '<p><label>To</label><label>'.$recipients.'</p>';    
        echo '<p><label>From</label><label>'.$sender.'</p>';
        echo '<p><label>Subject</label><label>'.$subject.'</p>';
        echo '<p><label>Body</label><label>'.$text.'</p>';
        echo '</div>';
        echo '</body>';
        echo '</html>';
    }
    //setter functions
    public function setSender($sender)
    {
        $this->$sender=$sender;  
    }

    public function setRecipient($recipients)
    {
        $this->$recipients=$recipients;
    }
    public function setText($text)
    {
        $this->$text=$text;
    }
    public function setSubject($subject)
    {
        $this->$subject=$subject;
    }
    //Getter functions
    public function getSender()
    {
        return $this->sender;
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function getRecipient()
    {
        return $this->recipients;
    }
    public function getText()
    {
        return $this->text;
    }
  }


?>