<?php
/**
*
*/
class Public_text {

  private $validError;

  private $firstName;
  private $lastName;
  private $fullNameShow;
  private $authorName;
  private $authorNameShow;
  private $email;
  private $emailShow;
  private $textHeader;
  private $textContain;
  private $textTag;
  private $textEndDate;
  private $textLanguage;
  private $systemTermsAccepted;
  private $id;
  //private $;

/*
  function __construct( $firstName = "", $lastName = "", $fullNameShow = false, $authorName = "", $authorNameShow = false, $email = "", $emailShow = false, $textHeader = "", $textContain = "", $textTag = "", $textEndDate = "", $textLanguage = "", $systemTermsAccepted = "") {

    $this->firstName;
    $this->lastName;
    $this->fullNameShow;
    $this->authorName;
    $this->authorNameShow;
    $this->email;
    $this->emailShow;
    $this->textHeader;
    $this->textContain;
    $this->textTag;
    $this->textEndDate;
    $this->textLanguage;
    $this->systemTermsAccepted;
    */

  function __construct($allPost){
    //print_r($allPost);if(isset($allPost['']))

    if(isset($allPost['public_text_author_name_first'])){
      $this->setFirstName($this->checkFirstName($allPost['public_text_author_name_first']));
    } else {
      $this->setFirstName($this->checkFirstName(""));
    }

    if(isset($allPost['public_text_author_name_last'])) {
    $this->setLastName($this->checkLastName($allPost['public_text_author_name_last']));
  } else {
    $this->setLastName($this->checkLastName(""));
  }

    if(isset($allPost['public_text_author_name_show'])) {
      $this->setFullNameShow($this->checkFullNameShow($allPost['public_text_author_name_show']));
    } else {
      $this->setFullNameShow($this->checkFullNameShow(""));
    }

    if(isset($allPost['public_text_author'])) {
      $this->setAuthorName($this->checkAuthorName($allPost['public_text_author']));
    } else {
      $this->setAuthorName($this->checkAuthorName(""));
    }

    if(isset($allPost['public_text_author_show'])) {
      $this->setAuthorNameShow($this->checkAuthorNameShow($allPost['public_text_author_show']));
    } else {
      $this->setAuthorNameShow($this->checkAuthorNameShow(""));
    }

    if(isset($allPost['public_text_author_email'])) {
      $this->setEmail($this->checkEmail($allPost['public_text_author_email']));
    } else {
      $this->setEmail($this->checkEmail(""));
    }

    if(isset($allPost['public_text_email_show'])) {
      $this->setEmailShow($this->checkEmailShow($allPost['public_text_email_show']));
    } else {
      $this->setEmailShow($this->checkEmailShow(""));
    }

    if(isset($allPost['public_text_header'])) {
      $this->setTextHeader($this->checkTextHeader($allPost['public_text_header']));
    } else {
      $this->setTextHeader($this->checkTextHeader(""));
    }

    if(isset($allPost['public_text_content'])) {
      $this->setTextContain($this->checkTextContain($allPost['public_text_content']));
    } else {
      $this->setTextContain($this->checkTextContain(""));
    }

    if(isset($allPost['public_text_tag'])) {
      $this->setTextTag($this->checkTextTag($allPost['public_text_tag']));
    } else {
      $this->setTextTag($this->checkTextTag(""));
    }


    if(isset($allPost['public_text_date_end'])) {
      $this->setTextEndDate($this->checkTextEndDate($allPost['public_text_date_end']));
    } else {
      $this->setTextEndDate($this->checkTextEndDate(""));
    }

    if(isset($allPost['public_text_language'])) {
      $this->setTextLanguage($this->checkTextLanguage($allPost['public_text_language']));
    } else {
      $this->setTextLanguage($this->checkTextLanguage(""));
    }

    if(isset($allPost['public_text_agreed'])) {
      $this->setSystemTermsAccepted($this->checkSystemTermsAccepted($allPost['public_text_agreed']));
    } else {
      $this->setSystemTermsAccepted($this->checkSystemTermsAccepted(""));
    }



    //$this->set($this->check($allPost['']));

    //print_r($this->validError);

  }

  public function getvalidError() {
    return $this->validError;
  }


  // setter, getter and checker to varitable firstName
  public function setFirstName($firstName) {
    $this->firstName = trim ( $firstName );
  }

  public function getFirstName() {
    return $this->firstName;
  }

  public function checkFirstName($firstName = "", $required = true, $min = 3, $max = 50) {
    $error = array();
    $validfirstName = "";

    if($firstName == "" && $required == true){
      array_push($error, "Etunimi on pakollinen");
    }

    if(!empty($error))
    $this->validError['public_text_author_name_first'] = $error;

    $validfirstName = $firstName;
    //if($this->validError['firstName']) {}
    return $validfirstName;

  }


  // setter, getter and checker to varitable lastName
  public function setLastName($lastName) {
    $this->lastName = trim ( $lastName );
  }

  public function getLastName() {
    return $this->lastName;
  }

  public function checkLastName($lastName = "", $required = true, $min = 3, $max = 50) {
    $this->validError['lastName'] = "false";
    $validlastName = "";

    $validlastName = $lastName;
    //if($this->validError['']) {}
    return $validlastName;
  }


  // setter, getter and checker to varitable fullNameShow
  public function setFullNameShow($fullNameShow) {
    $this->fullNameShow = trim ( $fullNameShow );
  }

  public function getFullNameShow() {
  return $this->fullNameShow;
  }

  public function checkFullNameShow($fullNameShow = "", $required = true, $min = 3, $max = 50) {
    $this->validError['fullNameShow'] = "false";
    $validfullNameShow = "";

    $validfullNameShow = $fullNameShow;
    //if($this->validError['']) {}
    return $validfullNameShow;
  }


  // setter, getter and checker to varitable authorName
  public function setAuthorName($authorName) {
    $this->authorName = trim ( $authorName );
  }

  public function getAuthorName() {
    return $this->authorName;
  }

  public function checkAuthorName($authorName = "", $required = true, $min = 3, $max = 50) {
    $this->validError['authorName'] = "false";
    $validauthorName = "";

    $validauthorName = $authorName;
    //if($this->validError['']) {}
    return $validauthorName;
  }


  // setter, getter and checker to varitable authorNameShow
  public function setAuthorNameShow($authorNameShow) {
    $this->authorNameShow = trim ( $authorNameShow );
  }

  public function getAuthorNameShow() {
    return $this->authorNameShow;
  }

  public function checkAuthorNameShow($authorNameShow = "", $required = true, $min = 3, $max = 50) {
    $this->validError['authorNameShow'] = "false";
    $validauthorNameShow = "";

    $validauthorNameShow = $authorNameShow;
    //if($this->validError['']) {}
    return $validauthorNameShow;
  }


  // setter, getter and checker to varitable email
  public function setEmail($email) {
    $this->email = trim ( $email );
  }

  public function getEmail() {
    return $this->email;
  }

  public function checkEmail($email = "", $required = true, $min = 3, $max = 50) {
    $this->validError['email'] = "false";
    $validemail = "";

    $validemail = $email;
    //if($this->validError['']) {}
    return $validemail;
  }


  // setter, getter and checker to varitable emailShow
  public function setEmailShow($emailShow) {
    $this->emailShow = trim ( $emailShow );
  }

  public function getEmailShow() {
    return $this->emailShow;
  }

  public function checkEmailShow($emailShow = "", $required = true, $min = 3, $max = 50) {
    $this->validError['emailShow'] = "false";
    $validemailShow = "";

    $validemailShow = $emailShow;
    //if($this->validError['']) {}
    return $validemailShow;
  }


  // setter, getter and checker to varitable textHeader
  public function setTextHeader($textHeader) {
    $this->textHeader = trim ( $textHeader );
  }

  public function getTextHeader() {
  return $this->textHeader;
  }

  public function checkTextHeader($textHeader = "", $required = true, $min = 3, $max = 50) {
    $this->validError['textHeader'] = "false";
    $validtextHeader = "";

    $validtextHeader = $textHeader;
    //if($this->validError['']) {}
    return $validtextHeader;
  }


  // setter, getter and checker to varitable textContain
  public function setTextContain($textContain) {
    $this->textContain = trim ( $textContain );
  }

  public function getTextContain() {
    return $this->textContain;
  }

  public function checkTextContain($textContain = "", $required = true, $min = 3, $max = 50) {
    $this->validError['textContain'] = "false";
    $validtextContain = "";

    $validtextContain = $textContain;
    //if($this->validError['']) {}
    return $validtextContain;
  }


  // setter, getter and checker to varitable textTag
  public function setTextTag($textTag) {
    $this->textTag = trim ( $textTag );
  }

  public function getTextTag() {
    return $this->textTag;
  }

  public function checkTextTag($textTag = "", $required = true, $min = 3, $max = 50) {
    $this->validError['textTag'] = "false";
    $validtextTag = "";

    $validtextTag = $textTag;
    //if($this->validError['']) {}
    return $validtextTag;
  }


  // setter, getter and checker to varitable textEndDate
  public function setTextEndDate($textEndDate) {
    $this->textEndDate = trim ( $textEndDate );
  }

  public function getTextEndDate() {
    return $this->textEndDate;
  }

  public function checkTextEndDate($textEndDate = "", $required = true, $min = 3, $max = 50) {
    $this->validError['textEndDate'] = "false";
    $validtextEndDate = "";

    $validtextEndDate = $textEndDate;
    //if($this->validError['']) {}
    return $validtextEndDate;
  }


  // setter, getter and checker to varitable textLanguage
  public function setTextLanguage($textLanguage) {
    $this->textLanguage = trim ( $textLanguage );
  }

  public function getTextLanguage() {
    return $this->textLanguage;
  }

  public function checkTextLanguage($textLanguage = "", $required = true, $min = 3, $max = 50) {
    $this->validError['textLanguage'] = "false";
    $validtextLanguage = "";

    $validtextLanguage = $textLanguage;
    //if($this->validError['']) {}
    return $validtextLanguage;
  }


  // setter, getter and checker to varitable systemTermsAccepted
  public function setSystemTermsAccepted($systemTermsAccepted) {
    $this->systemTermsAccepted = trim ( $systemTermsAccepted );
  }

  public function getSystemTermsAccepted() {
    return $this->systemTermsAccepted;
  }

  public function checkSystemTermsAccepted($systemTermsAccepted = "", $required = true, $min = 3, $max = 50) {
    $this->validError['systemTermsAccepted'] = "false";
    $validsystemTermsAccepted = "";

    $validsystemTermsAccepted = $systemTermsAccepted;
    //if($this->validError['']) {}
    return $validsystemTermsAccepted;
  }


  // setter, getter and checker to varitable id
  public function setId($id) {
    $this->id = trim ( $id );
  }

  public function getId() {
    return $this->id;
  }

  public function checkId($id = "", $required = true, $min = 3, $max = 50) {
    $this->validError['id'] = "false";
    $validid = "";

    $validid = $id;
    //if($this->validError['']) {}
    return $validid;
  }
}
