<?php

  $hostname = "localhost";
  $dbname = "belsut";
  $username = "root";
  $password = "Pa23004263501";
  $charset = "utf8mb4";

  try {
      $conn = new PDO("mysql:host=$hostname; dbname=$dbname; charset=$charset;", $username, $password);
  }
  catch (PDOException $e){
      print("Connection failed: " . $e->getMessage());
  }  

  function Parse($p1, $p2, $p3) { // вытаскивает данные из сайта
    $num1 = strpos($p1, $p2);
  
    if ($num1 === false) 
      return 0;
    $num2 = substr($p1, $num1);
    return strip_tags(substr($num2, 0, strpos($num2, $p3)));
  }

  class Questions { // класс для поиска вопросов и ответов

    private $name = '';
    private $site_name = '';

    private $question_start = '<em class="ques">';
    private $question_end = '</em>';

    private $answer_start = '<div class="ans">';
    private $answer_end = '</div>';

    public function __construct(string $name, string $site_name)
    {
      $this->name = $name;
      $this->site_name = $site_name;
    }

    public function ParseQuestion()
    {
      return $question = Parse(file_get_contents($this->site_name), $this->question_start, $this->question_end);
    }

    public function ParseAnswer()
    {
      return $answer = Parse(file_get_contents($this->site_name), $this->answer_start, $this->answer_end);
    }
  }

  $first_q = new Questions('first question', 'https://www.bsut.by/applicants/admission/admission-info/answers');

  /*   <?php print($first_q->ParseQuestion()) ?>   */
  /*   <?php print($first_q->ParseAnswer()) ?>   */

  class Etf_info { // класс для поиска значений для БД etf_info

    private $site_name = '';

    private $name_start = '<span class="name">';
    private $name_end = '</span>';

    private $code_start = '<span class="code">';
    private $code_end = '</span>';

    private $period_start = '<span class="period">';
    private $period_end = '</span>';

    private $admission_plan_start = '<span class="adm_plan">';
    private $admission_plan_end = '</span>';

    private $admission_plan_year_start = '<span class="adm_plan_y">';
    private $admission_plan_year_end = '</span>';

    private $score_start = '<span class="score">';
    private $score_end = '</span>';

    private $score_year_start = '<span class="score_y">';
    private $score_year_end = '</span>';
    
    private $exam1_start = '<span class="exam_1">';
    private $exam1_end = '</span>';

    private $exam2_start = '<span class="exam_2">';
    private $exam2_end = '</span>';

    private $exam3_start = '<span class="exam_3">';
    private $exam3_end = '</span>';
    
    public function __construct(string $site_name)
    {
      $this->site_name = $site_name;
    }

    public function ParseName()
    {
      return $name = Parse(file_get_contents($this->site_name), $this->name_start, $this->name_end);
    }

    public function ParseCode()
    {
      return $code = Parse(file_get_contents($this->site_name), $this->code_start, $this->code_end);
    }

    public function ParsePeriod()
    {
      return $period = Parse(file_get_contents($this->site_name), $this->period_start, $this->period_end);
    }

    public function ParseAdmissionPlan()
    {
      return $admission_plan = Parse(file_get_contents($this->site_name), $this->admission_plan_start, $this->admission_plan_end);
    }

    public function ParseAdmissionPlanYear()
    {
      return $admission_plan_year = Parse(file_get_contents($this->site_name), $this->admission_plan_year_start, $this->admission_plan_year_end);
    }

    public function ParseScore()
    {
      return $score = Parse(file_get_contents($this->site_name), $this->score_start, $this->score_end);
    }

    public function ParseScoreYear()
    {
      return $score_year = Parse(file_get_contents($this->site_name), $this->score_year_start, $this->score_year_end);
    }

    public function ParseExam1()
    {
      return $exam1 = Parse(file_get_contents($this->site_name), $this->exam1_start, $this->exam1_end);
    }

    public function ParseExam2()
    {
      return $exam2 = Parse(file_get_contents($this->site_name), $this->exam2_start, $this->exam2_end);
    }

    public function ParseExam3()
    {
      return $exam3 = Parse(file_get_contents($this->site_name), $this->exam3_start, $this->exam3_end);
    }
  }

  //$Automatic = new Etf_info('https://www.bsut.by/university/faculties/etf/specialities-et/at');
  //$InformationTransmissionSystems = new Etf_info('https://www.bsut.by/university/faculties/etf/specialities-et/spi');
  $MicroprocessorSystems = new Etf_info('https://www.bsut.by/university/faculties/etf/specialities-et/mius');
  
  //$sql = ""; 
  //mysqli_query($conn, query: "REPLACE INTO `etf_info` (`id`, `name`, `code`, `period`, `admission_plan`, `admission_plan_year`, `score`, `score_year`) VALUES ('1', $MicroprocessorSystems->ParseName(), $MicroprocessorSystems->ParseCode(), $MicroprocessorSystems->ParsePeriod(), $MicroprocessorSystems->ParseAdmissionPlan(), $MicroprocessorSystems->ParseAdmissionPlanYear(), $MicroprocessorSystems->ParseScore(), $MicroprocessorSystems->ParseScoreYear())"); // update db etf_info
  //mysqli_query($conn, query: "REPLACE INTO `etf_specializations` (`exam_1`, `exam_2`, `exam_3`) VALUES ($MicroprocessorSystems->ParseExam1(), $MicroprocessorSystems->ParseExam2(), $MicroprocessorSystems->ParseExam3())"); // update db etf_specializations
  // таких ещё 2 строки для каждой специализации




  // код ниже записать в scores.php в тег 'p' и тег 'h3'

  /*   <?php print($Automatic->ParseName()) ?>   */
  /*   <?php print($Automatic->ParseCode()) ?>   */
  /*   <?php print($Automatic->ParsePeriod()) ?>   */
  /*   <?php print($Automatic->ParseAdmissionPlan()) ?>   */
  /*   <?php print($Automatic->ParseAdmissionPlanYear()) ?>   */
  /*   <?php print($Automatic->ParseScore()) ?>   */
  /*   <?php print($Automatic->ParseScoreYear()) ?>   */
  /*   <?php print($Automatic->ParseExam1()) ?>   */
  /*   <?php print($Automatic->ParseExam2()) ?>   */
  /*   <?php print($Automatic->ParseExam3()) ?>   */