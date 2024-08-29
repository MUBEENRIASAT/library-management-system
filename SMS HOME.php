
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <link rel="stylesheet" href="style (1).css"> 
</head>
<body> 
    <form action="/server">
    <div class="L" name="nav" id="nav">
    <nav class="L">
    <ul>
    <li class="L"> <a href="sibnin.html">Signin</a></li>
    <li class="L"> <a href="signup.html">SignUp</a></li>
    <li class="L"> <a href="SMS HOME.html">Search</a></li>
    <li class ="L"><a href="library.html">Home </a></li>
    <li class ="L"><a href="help.html">Help</a><li>
    </ul>
    </nav>
</form>
</div>
<form action="/server">        
    <div>
    <h3 class="D" id="computer" name="book">Select Computer Book</h3>
    <select name="choose" id="choose">
    <option value="DS">Data Science</option>
    <option value="OOP">OOP</option>
    <option value="JS">JavaScript</option>
    <option value="ML">Machine learning</option>
    <option value="DB">DataBase Management System</option>
    <option value="c++">C++</option>
    </select>
        <h3 class="D" id="math" name="book">Select Math Book</h3>
        <select name="choose" id="choose">
        <option value="BA">Business Mathematics</option>
        <option value="DM">Discrete Mathematics</option>
        <option value="C">Calculation</option>
        <option value="GT">Classical Mechanics</option>
        <option value="T"> Algebric Topology</option>
        </select>    
        <h3 class="D" id="history" name="book">Select History Book</h3>
        <select name="choose" id="choose">
        <option value="oow">The origin of second world war</option>
        <option value="JB">The Black Jacobins</option>
        <option value="AP">The History of Arab People</option>
        <option value="RE">The decline and fall of Roman Empire</option>
        <option value="HR">The History of Russia</option>
            </select>  
            <h3 calss="D" id="z" name="zoo">Select Zoology Book</h3>
            <select   name="choose" id="choose">
                <option value="BC">Biochemistry by lehninger</option>
                <option value="Eb">Encyclopedia of birds</option>
                <option value="K">Zoology for kids</option>
                <option value="AB">Animal Behaviour</option>
            </select>    
            <br><br>
           <button>Submit</button>
        </div>
        </form> 
<br> <br>
<ul>
<li><a href="BioChemistry.jpeg" alt="BioChemistry"> BIOCHEMISTRY</a></li>
<li><a href="zoology for kids.jpeg" alt="zoology for kids">  zoology for kids</a></li>
<li><a href="Animal Behaviour.jpeg" alt="Animal Behaviour"> AnimalBehavior</a></li>
<li><a href="ML.jpeg" alt="ML"> Machine Learning</a></li>
<li><a href="ML.jpeg" alt="ML"> Machine Learning</a></li>
<li><a href="c++.jpeg" alt="c++"> c++</a></li>
<li><a href="javascript.jpeg" alt="javascript"> javascript</a></li>
<li><a href="DS.jpeg" alt="DS"> Data Science</a></li>
<li><a href="OOP.jpeg" alt="oop"> OOP</a></li>
<li><a href="ndbms.jpeg" alt="ndbms"> DataBase Management System</a></li>
<li><a href="DS.jpeg" alt="DS">Data Structure</a></li>
<li><a href="The DAFORE.jpeg" alt="The DAFORE"> The History of Decline and fall of Roman Empire</a></li>
<li><a href="The HOR .jpeg" alt="The HOR"> The History of Russia</a></li>
<li><a href="Encyclopedia of birds.jpeg" alt ="Encyclopedia of birds"> Encyclopedia of birds</a></li>
<li><a href="The HOAP.jpeg">The History of Arab People</a></li>
<li><a href="calculation.jpg">calculation</a></li>
<li><a href="BM.jpg" alt="BM">business Mathematics</a></li>
<li><a href="discrete.jpg" alt="discrete">Discrete</a></li>
<li><a href="AB.jpg" alt="AB">Algebric mathematics</a></li>
<li><a href="cl.jpg" alt="ci">classical mathematics</a></li>
<li><a href="The Ori.jpeg" alt="The ori">The origin of second world war</a></li>
<li><a href="The blajac.jpeg" alt="The blajac">The black jacobins</a></li>
</ul>
</section>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $computer_book = $_POST["computer_book"];
  $math_book = $_POST["math_book"];
  $history_book = $_POST["history_book"];
  $zoology_book = $_POST["zoology_book"];

  // Process the selected values here
  echo "Selected books: $computer_book, $math_book, $history_book, $zoology_book";
}
?>