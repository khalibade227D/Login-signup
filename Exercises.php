<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic PHP Exercises 1-47</title>
  <link rel="stylesheet" href="style.css">
</head>



<body>
  <button class="burger" id="burgerBtn" aria-label="Toggle menu">
    ☰
  </button>
  <br>
  <nav class="sidenav" id="sidenav" aria-label="Task categories">

    <button class="close-btn" id="closeBtn" aria-label="Close menu">✕</button>
    <div class="brand"><b>Coding Exercise</b></div>

    <div class="category" data-target="cat1">
      <h3>Basics Arithmetics</h3>
      <a href="#task1"><span class="idx">01</span> Print a message</a>
      <a href="#task2"><span class="idx">02</span> Two-number operations</a>
      <a href="#task3"><span class="idx">03</span> Simple interest calculation</a>
      <a href="#task4"><span class="idx">04</span> Area calculations (circle, rectangle, square)</a>
      <a href="#task5"><span class="idx">05</span> Percentage from 5 subjects</a>
      <a href="#task6"><span class="idx">06</span> Average of 7 numbers</a>
      <a href="#task7"><span class="idx">07</span> (a+b)², (a+b)³, (a²−b²)</a>
      <a href="#task8"><span class="idx">08</span> Circumference of a circle</a>
      <a href="#task9"><span class="idx">09</span> Swap numbers using a third variable</a>
      <a href="#task10"><span class="idx">10</span> Swap numbers without using a third variable</a>
      <a href="#task11"><span class="idx">11</span> Temperature conversion (C ↔ F)</a>
      <a href="#task12"><span class="idx">12</span> Gross Salary Calculation</a>
    </div>

    <div class="category" data-target="cat2">
      <h3>Condition logic</h3>
      <a href="#task13"><span class="idx">13</span> Voting eligibility</a>
      <a href="#task14"><span class="idx">14</span>Value of M and N</a>
      <a href="#task15"><span class="idx">15</span> Login simulation</a>
      <a href="#task16"><span class="idx">16</span> Even or odd</a>
      <a href="#task17"><span class="idx">17</span> Positive or negative</a>
      <a href="#task18"><span class="idx">18</span> Equal numbers</a>
      <a href="#task19"><span class="idx">19</span> PASS/FAIL from percentage</a>
      <a href="#task20"><span class="idx">20</span> Leap year check</a>
      <a href="#task21"><span class="idx">21</span> Grade description</a>
      <a href="#task22"><span class="idx">22</span> Admission eligibility (Jamb/UTME)</a>
      <a href="#task23"><span class="idx">23</span> Discount calculator</a>
      <a href="#task24"><span class="idx">24</span> Greater between two numbers</a>
      <a href="#task25"><span class="idx">25</span> Even/odd with conditional operator</a>
      <a href="#task26"><span class="idx">26</span> Largest of three numbers</a>
      <a href="#task27"><span class="idx">27</span> Percentage(%) and grade in 5 Subjects</a>
      <a href="#task28"><span class="idx">28</span> Gross salary(2)</a>
      <a href="#task29"><span class="idx">29</span> Display the days of the week using (switch)</a>
      <a href="#task30"><span class="idx">30</span> Display Arithmetic Operations using (switch)</a>
    </div>

    <div class="category" data-target="cat3">
      <h3>Loops and Sequence</h3>
      <a href="#task31"><span class="idx">31</span> Print a name 10 times</a>
      <a href="#task32"><span class="idx">32</span> Print first 10 natural numbers</a>
      <a href="#task33"><span class="idx">33</span> First N natural numbers and sum</a>
      <a href="#task34"><span class="idx">34</span> SI for 3 sets of (p, n, r)</a>
      <a href="#task35"><span class="idx">35</span> Print series: 10..1 / even 2..20 / 10,13.5,17,…</a>
      <a href="#task36"><span class="idx">36</span> Factorial of a number using (for / while) loop</a>
      <a href="#task37"><span class="idx">37</span> Sum of 1/1 + 1/4 + … + 1/25</a>
      <a href="#task38"><span class="idx">38</span> Squares of first 10 numbers and sum</a>
      <a href="#task39"><span class="idx">39</span> Product and average of first N</a>
      <a href="#task40"><span class="idx">40</span> Even numbers from first 100</a>
      <a href="#task41"><span class="idx">41</span> Fibonacci up to n</a>
      <a href="#task42"><span class="idx">42</span> Print table of a number</a>
      <a href="#task43"><span class="idx">43</span> Reverse a 3-digit number</a>
      <a href="#task44"><span class="idx">44</span> Palindrome check</a>
      <a href="#task45"><span class="idx">45</span> Armstrong check</a>
      <a href="#task46"><span class="idx">46</span> Prime numbers from first 100</a>
      <a href="#task47"><span class="idx">47</span> Various patterns (pyramid &amp; matrices)</a>
    </div>
  </nav>

  <main class="main" id="main">
    <div class="page-head">
      <div class="eyebrow">// 47 exercises </div>
      <h1>PHP practice worksheet</h1>
      <p>Each block below is a small, self-contained "write a program" exercise. Fill in the inputs and hit run — the server evaluates it and prints the result right under the form.</p>
    </div>
    <section id="task1">
      <p class="eyebrow">Task 1</p>
      <h2>Print a Message</h2>
      <p class="desc">Prints any message on the screen.</p>

      <?php

      echo "<div class='result'>" . " any message" . "</div>";

      ?>
    </section>
    <section id="task2">
      <p class="eyebrow">Task 2</p>
      <h2>Addition, Subtraction, Multiplication and Division</h2>
      <p class="desc">Enter two numbers to see all four basic operations (+,-,*&/).</p>
      <form action="#task2" method="post">
        <div class="row">
          <div><label for="num1">First number</label><input type="number" id="num1" name="num1" step="any" required></div>
          <div><label for="num2">Second number</label><input type="number" id="num2" name="num2" step="any" required></div>
        </div>
        <input type="submit" name="submit2" value="Compute">
      </form>
      <?php
      if (isset($_POST['submit2'])) {
        $num1 =  $_POST['num1'];
        $num2 =  $_POST['num2'];
        $add  = $num1 + $num2;
        $sub = $num1 - $num2;
        $multiply = $num1 * $num2;
        $divide  =  $num1 / $num2;
        echo "<div class='result'>Addition: {$add}\nSubtraction: {$sub}\nMultiplication: {$multiply}\nDivision: {$divide}</div>";
      }
      ?>
    </section>
    <section id="task3">
      <p class="eyebrow">Task 3</p>
      <h2>Simple Interest</h2>
      <p class="desc">Write a program to input principal, rate, time & find the simple interest. </p>
      <p class="desc">Simple Interest = Principal × Time × Rate ÷ 100.</p>
      <form action="#task3" method="post">
        <div class="row">
          <div><label for="P3">Principal($)</label><input type="number" id="P3" name="P3" step="any" required></div>
          <div><label for="T3">Time (yrs)</label><input type="number" id="T3" name="T3" step="any" required></div>
          <div><label for="R3">Rate (%)</label><input type="number" id="R3" name="R3" step="any" required></div>
        </div>
        <input type="submit" name="submit3" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit3'])) {
        $P3 = $_POST['P3'];
        $T3 =  $_POST['T3'];
        $R3 =  $_POST['R3'];
        $si = $P3 * $T3 * $R3 / 100;
        echo "<div class='result'>Simple Interest: " . $si . "</div>";
      }
      ?>
    </section>
    <section id="task4">
      <p class="eyebrow">Task 4</p>
      <h2>Areas of Circle, Rectangle and Square</h2>
      <p class="desc">Write a program to print area of circle, rectangle & square. </p>
      <p class="desc">
        Area of Circle = π(pi) × r(radius) × r(radius) or π(pi)× D(diameter) <br>
        Area of Rectangle = L(length) × B(breadth) <br>
        Area of Rectangle = L(length) × L(length).
      </p>
      <form action="#task4" method="post">
        <label for="radius4">Radius (circle)</label>
        <input type="number" id="radius4" name="radius4" step="any" required>
        <div class="row">
          <div><label for="length4">Length (rectangle/square)</label><input type="number" id="length4" name="length4" step="any" required></div>
          <div><label for="width4">Width (rectangle)</label><input type="number" id="width4" name="width4" step="any" required></div>
        </div>
        <input type="submit" name="submit4" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit4'])) {
        $radius4 = (float) $_POST['radius4'];
        $length4 = (float) $_POST['length4'];
        $width4  = (float) $_POST['width4'];
        $circleArea = pi() * $radius4 * $radius4;
        $rectArea   = $length4 * $width4;
        $squareArea = $length4  * $length4;
        echo "<div class='result'>Circle area: {$circleArea}\nRectangle area: {$rectArea}\nSquare area: {$squareArea}</div>";
      }
      ?>
    </section>
    <section id="task5">
      <p class="eyebrow">Task 5</p>
      <h2>Percentage of Marks (5 subjects)</h2>
      <p class="desc">Write a program to enter the marks of a student in 5 subjects & calculate the
        percentage. </p>
      <p class="desc"> Percentage = (Maths + English +Physics + Chemistry + Economics / 500) * 100.</p>
      <form action="#task5" method="post">
        <div class="row">
          <div><label for="M5">Math</label><input type="number" id="M5" name="M5" required></div>
          <div><label for="E5">English</label><input type="number" id="E5" name="E5" required></div>
        </div>
        <div class="row">
          <div><label for="Ph5">Physics</label><input type="number" id="Ph5" name="Ph5" required></div>
          <div><label for="C5">Chemistry</label><input type="number" id="C5" name="C5" required></div>
        </div>
        <label for="EC5">Economics</label><input type="number" id="EC5" name="EC5" required>
        <input type="submit" name="submit5" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit5'])) {
        $M5 = (float) $_POST['M5'];
        $E5 = (float) $_POST['E5'];
        $Ph5 = (float) $_POST['Ph5'];
        $C5 = (float) $_POST['C5'];
        $EC5 = (float) $_POST['EC5'];
        $total5 = $M5 + $E5 + $Ph5 + $C5 + $EC5;
        $pct5 = ($total5 / 500) * 100;
        echo "<div class='result'>Total: {$total5} / 500\nPercentage: " . $pct5 . "%</div>";
      }
      ?>
    </section>
    <section id="task6">
      <p class="eyebrow">Task 6</p>
      <h2>Average of 7 Numbers</h2>
      <p class="desc">Write a program to find the average of 7 numbers. </p>
      <p class="desc"> Average = (n1+n2+n3+n4+n5+n6+n7)/7.</p>
      <form action="#task6" method="post">
        <div class="row">
          <div><label for="n6_1">#1</label><input type="number" id="n6_1" name="n6_1" step="any" required></div>
          <div><label for="n6_2">#2</label><input type="number" id="n6_2" name="n6_2" step="any" required></div>
          <div><label for="n6_3">#3</label><input type="number" id="n6_3" name="n6_3" step="any" required></div>
        </div>
        <div class="row">
          <div><label for="n6_4">#4</label><input type="number" id="n6_4" name="n6_4" step="any" required></div>
          <div><label for="n6_5">#5</label><input type="number" id="n6_5" name="n6_5" step="any" required></div>
          <div><label for="n6_6">#6</label><input type="number" id="n6_6" name="n6_6" step="any" required></div>
        </div>
        <label for="n6_7">#7</label><input type="number" id="n6_7" name="n6_7" step="any" required>
        <input type="submit" name="submit6" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit6'])) {
        $nums6 = [];
        for ($i = 1; $i <= 7; $i++) $nums6[] = (float) $_POST["n6_{$i}"];
        $avg6 = array_sum($nums6) / count($nums6);
        echo "<div class='result'>Numbers: " . implode(', ', $nums6) . "\nAverage: " . $avg6 . "</div>";
      }
      ?>
    </section>
    <section id="task7">
      <p class="eyebrow">Task 7</p>
      <h2>(a+b)², (a+b)³, (a²−b²)</h2>
      <p class="desc">Write a program to calculate.
        (a+b)², (a+b)³ and (a²−b²) </p>
      <form action="#task7" method="post">
        <div class="row">
          <div><label for="a7">a</label><input type="number" id="a7" name="a7" step="any" required></div>
          <div><label for="b7">b</label><input type="number" id="b7" name="b7" step="any" required></div>
        </div>
        <input type="submit" name="submit7" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit7'])) {
        $a7 = (float) $_POST['a7'];
        $b7 = (float) $_POST['b7'];
        $sumSq = ($a7 + $b7) ** 2;
        $sumCube = ($a7 + $b7) ** 3;
        $diffSq = ($a7 ** 2) - ($b7 ** 2);
        echo "<div class='result'>(a+b)² = {$sumSq}\n(a+b)³ = {$sumCube}\na² - b² = {$diffSq}</div>";
      }
      ?>
    </section>
    <section id="task8">
      <p class="eyebrow">Task 8</p>
      <h2>Circumference of a Circle</h2>
      <p class="desc"> Write a program to find the circumference of a circle.<br> Circumference of a circle = 2 × π(pi) × r(radius) </p>
      <form action="#task8" method="post">
        <label for="R8">Radius</label>
        <input type="number" id="R8" name="R8" step="any" required>
        <input type="submit" name="submit8" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit8'])) {
        $R8 =  $_POST['R8'];
        $circumference = 2 * pi() * $R8;
        echo "<div class='result'>Circumference: {$circumference}</div>";
      }
      ?>
    </section>
    <section id="task9">
      <p class="eyebrow">Task 9</p>
      <h2>Swap Two Numbers Using a Third Variable</h2>
      <p class="desc">write a program to swap two number by using a third variable </p>
      <form action="#task9" method="post">
        <div class="row">
          <div><label for="a9">a</label><input type="number" id="a9" name="a9" step="any" value="4" required></div>
          <div><label for="b9">b</label><input type="number" id="b9" name="b9" step="any" value="6" required></div>
        </div>
        <input type="submit" name="submit9" value="Swap">
      </form>
      <?php
      if (isset($_POST['submit9'])) {
        $a9 =  $_POST['a9'];
        $b9 =  $_POST['b9'];
        echo "<div class='result'>Before: a = {$a9}, b = {$b9}</div>";
        $temp9 = $a9;
        $a9 = $b9;
        $b9 = $temp9;
        echo "<div class='result'>After: a = {$a9}, b = {$b9}</div>";
      }
      ?>
    </section>
    <section id="task10">
      <p class="eyebrow">Task 10</p>
      <h2>Swap Two Numbers Without a Third Variable</h2>
      <p class="desc">write a program to swap two numbers without using a third variable </p>
      <form action="#task10" method="post">
        <div class="row">
          <div><label for="a10">a</label><input type="number" id="a10" name="a10" step="any" value="4" required></div>
          <div><label for="b10">b</label><input type="number" id="b10" name="b10" step="any" value="6" required></div>
        </div>
        <input type="submit" name="submit10" value="Swap">
      </form>
      <?php
      if (isset($_POST['submit10'])) {
        $a10 = (float) $_POST['a10'];
        $b10 = (float) $_POST['b10'];
        echo "<div class='result'>Before: a = {$a10}, b = {$b10}</div>";
        $a10 = $a10 + $b10;
        $b10 = $a10 - $b10;
        $a10 = $a10 - $b10;
        echo "<div class='result'>After: a = {$a10}, b = {$b10}</div>";
      }
      ?>
    </section>
    <section id="task11">
      <p class="eyebrow">Task 11</p>
      <h2>Temperature Converter</h2>
      <p class="desc">write a program to convert temperature from degree Celsius to Fahrenheit
        & vice-versa <br>
        °F = °C * (9/5 + 32) <br>
        °C = 5 /9 * (°F − 32 )
      </p>
      <form action="#task11" method="post">
        <div class="row">
          <div><label for="temp11">Temperature</label><input type="number" id="temp11" name="temp" step="any" required></div>
          <div>
            <label for="unit11">From</label>
            <select id="unit11" name="unit11" required>
              <option value="C">Celsius</option>
              <option value="F">Fahrenheit</option>
            </select>
          </div>
        </div>
        <input type="submit" name="submit11" value="Convert">
      </form>
      <?php
      if (isset($_POST['submit11'])) {
        $temp = $_POST['temp'];
        $unit11 = $_POST['unit11'];
        if ($unit11 === 'C') {
          $Fahrenheit = (9 / 5) * $temp + 32;
          echo "<div class='result'>{$temp}°C = " . $Fahrenheit . "°F</div>";
        } else {
          $Celsius = (5 / 9) * ($temp - 32);
          echo "<div class='result'>{$temp}°F = " . $Celsius . "°C</div>";
        }
      }
      ?>
    </section>
    <section id="task12">
      <p class="eyebrow">Task 12</p>
      <h2>Gross Salary</h2>
      <p class="desc"> Write a to program calculate the Gross Salary of an employee.
        <br>
        Assume Gross Salary = Basic Salary + DA + HRA <br>
        DA = 40% of Basic Salary <br>
        HRA = 20% of Basic Salary
      </p>
      <form action="#task12" method="post">
        <label for="BS12">Basic Salary</label>
        <input type="number" id="BS12" name="BS12" step="any" required>
        <input type="submit" name="submit12" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit12'])) {
        $BS12 = (float) $_POST['BS12'];
        $DA12 = 0.40 * $BS12;
        $HRA12 = 0.20 * $BS12;
        $gross12 = $BS12 + $DA12 + $HRA12;
        echo "<div class='result'>DA: " . $DA12 . "\nHRA: " . $HRA12 . "\nGross Salary: " . $gross12 . "</div>";
      }
      ?>
    </section>
    <section id="task13">
      <p class="eyebrow">Task 13</p>
      <h2>Voting Eligibility</h2>
      <p class="desc">Write a program to read the age of a candidate and determine whether he/she is
        eligible for casting his/her own vote. </p>
      <form action="#task13" method="post">
        <label for="age13">Age</label>
        <input type="number" id="age13" name="age13" required>
        <input type="submit" name="submit13" value="Check">
      </form>
      <?php
      if (isset($_POST['submit13'])) {
        $age13 = (int) $_POST['age13'];

        if ($age13 >= 18 && $age13 < 60) {
          echo  "<div class='result'>" . "Eligible to vote." . "</div>";
        } elseif ($age13 >= 60) {
          echo  "<div class='result'>" . "Go and rest Baba" . "</div>";
        } else {
          echo  "<div class='result'>" . "Not Eligible to vote." . "</div>";
        }
      }
      ?>
    </section>
    <section id="task14">
      <p class="eyebrow">Task 14</p>
      <h2>Value of M and N</h2>
      <p class="desc">Write a program to read the value of an integer m and display the value of n
        is 1 when m is larger than 0, 0 when m is 0 and -1 when m is less
        than 0 i.e.
        <br>when M > 0, N = 1
        <br>when M = 0, N = 0
        <br>when M < 0, N=-1
          </p>
          <form action="#task14" method="post">
            <label for="m14">Enter m</label>
            <input type="number" id="m14" name="m14" step="any" required>
            <input type="submit" name="submit14" value="Check">
          </form>
          <?php
          if (isset($_POST['submit14'])) {
            $m14 = (float) $_POST['m14'];
            if ($m14 > 0) $n14 = 1;
            elseif ($m14 == 0) $n14 = 0;
            else $n14 = -1;
            echo "<div class='result'>n = {$n14}</div>";
          }
          ?>
    </section>
    <section id="task15">
      <p class="eyebrow">Task 15</p>
      <h2>Login Simulation</h2>
      <p class="desc">Write a program to simulate a Login System by getting the username and
        password from the user.
        <br>Assuming Correct username: Admin & Correct password: 123456
      </p>
      <form action="#task15" method="post">
        <label for="username15">Username</label>
        <input type="text" id="username15" name="username15" required>
        <label for="password15">Password</label>
        <input type="text" id="password15" name="password15" required>
        <input type="submit" name="submit15" value="Log in">
      </form>
      <?php
      if (isset($_POST['submit15'])) {
        $username15 = $_POST['username15'];
        $password15 = $_POST['password15'];
        if ($username15 === 'Admin' && $password15 === '123456') {
          echo "<div class='result'>Welcome, Admin!</div>";
        } else {
          echo "<div class='result'>Incorrect username or password.</div>";
        }
      }
      ?>
    </section>
    <section id="task16">
      <p class="eyebrow">Task 16</p>
      <h2>Even or Odd</h2>
      <p class="desc">
        Write a program to find whether a number is even or odd
        <br>Integers divisible by 2 without remainder(even Numbers) <br>
        Integers divisible by 2 with remainder(Odd Numbers)
      </p>
      <form action="#task16" method="post">
        <label for="num16">Enter a number</label>
        <input type="number" id="num16" name="num16" required>
        <input type="submit" name="submit16" value="Check">
      </form>
      <?php
      if (isset($_POST['submit16'])) {
        $num16 = (int) $_POST['num16'];
        if ($num16 % 2 === 0) {
          echo "<div class='result'>" . "This is an even number." . "</div>";
        } else {
          echo "<div class='result'>" . "This is an odd number." . "</div>";
        }
      }
      ?>
    </section>
    <section id="task17">
      <p class="eyebrow">Task 17</p>
      <h2>Positive or Negative</h2>
      <p class="desc"> Write a program to find whether a number is positive or negative</p>
      <form action="#task17" method="post">
        <label for="num17">Enter a number</label>
        <input type="number" id="num17" name="num17" step="any" required>
        <input type="submit" name="submit17" value="Check">
      </form>
      <?php
      if (isset($_POST['submit17'])) {
        $num17 = (float) $_POST['num17'];
        if ($num17 > 0) {
          echo "<div class='result'>The number is positive.</div>";
        } elseif ($num17 < 0) {
          echo "<div class='result'>The number is negative.</div>";
        } else {
          echo "<div class='result'>The number is zero.</div>";
        }
      }
      ?>
    </section>
    <section id="task18">
      <p class="eyebrow">Task 18</p>
      <h2>Check Whether Two Integers Are Equal</h2>
      <p class="desc"> Write a program to accept two integers and check whether they are equal or
        not.</p>
      <form action="#task18" method="post">
        <div class="row">
          <div><label for="num1_18">First number</label><input type="number" id="num1_18" name="num1_18" required></div>
          <div><label for="num2_18">Second number</label><input type="number" id="num2_18" name="num2_18" required></div>
        </div>
        <input type="submit" name="submit18" value="Check">
      </form>
      <?php
      if (isset($_POST['submit18'])) {
        $num1_18 = (int) $_POST['num1_18'];
        $num2_18 = (int) $_POST['num2_18'];
        if ($num1_18 === $num2_18) {
          echo "<div class='result'>" .  "They are equal." . "</div>";
        } else {
          echo "<div class='result'>" .  "They are not equal." . "</div>";
        }
      }
      ?>
    </section>
    <section id="task19">
      <p class="eyebrow">Task 19</p>
      <h2>Pass or Fail</h2>
      <p class="desc">Write a program to enter the percentage of a student and print whether he/she PASSES
        or FAILS. <br>
        Passing percentage: 50%.</p>
      <form action="#task19" method="post">
        <label for="num19">Enter percentage</label>
        <input type="number" id="num19" name="num19" step="any" required>
        <input type="submit" name="submit19" value="Check">
      </form>
      <?php
      if (isset($_POST['submit19'])) {
        $num19 = (float) $_POST['num19'];
        if ($num19 >= 50 && $num19 <= 100) {
          echo "<div class='result'>" . "You pass." . "</div>";
        } elseif ($num19 > 100) {
          echo "<div class='result'>" . "Enter a valid percentage Score!." . "</div>";
        } else {
          echo "<div class='result'>" . "You Fail." . "</div>";
        }
      }
      ?>
    </section>
    <section id="task20">
      <p class="eyebrow">Task 20</p>
      <h2>Leap Year Check</h2>
      <p class="desc">Write a program to check whether a given year is a leap Year or not</p>
      <form action="#task20" method="post">
        <label for="year20">Enter year</label>
        <input type="number" id="year20" name="year20" required>
        <input type="submit" name="submit20" value="Check">
      </form>
      <?php
      if (isset($_POST['submit20'])) {
        $year = (int) $_POST['year20'];

        if ($year % 4 === 0 && $year % 400 === 0 && $year % 100 === 0) {
          echo "<div class='result'>{$year} is a leap year." . "</div>";
        } else {
          echo "<div class='result'>{$year} is not leap year." . "</div>";
        }
      }
      ?>
    </section>
    <section id="task21">
      <p class="eyebrow">Task 21</p>
      <h2>Grade Description</h2>
      <p class="desc"> Write a program to accept a grade and declare the equivalent
        description</p>
      <form action="#task21" method="post">
        <label for="grade21">Enter your Grade (A-D or F)</label>
        <input type="text" id="grade21" name="grade21" maxlength="1" required>
        <input type="submit" name="submit21" value="Check">
      </form>
      <?php
      if (isset($_POST['submit21'])) {
        $grade21 = strtoupper(trim($_POST['grade21']));

        if ($grade21 === "A") {
          echo "<div class='result'>Excellent performance.</div>";
        } elseif ($grade21 === "B") {
          echo "<div class='result'>Very good performance.</div>";
        } elseif ($grade21 === "C") {
          echo "<div class='result'>Satisfactory performance.</div>";
        } elseif ($grade21 === "D") {
          echo "<div class='result'>Below average performance.</div>";
        } elseif ($grade21 === "F") {
          echo "<div class='result'>Fail.</div>";
        } else {
          echo "<div class='result'>Please enter a valid grade (A-D or F).</div>";
        }
      }
      ?>
    </section>
    <section id="task22">
      <p class="eyebrow">Task 22</p>
      <h2>Admission Eligibility</h2>
      <p class="desc">Write a program to find the eligibility of admission for a
        professional course based on the following criteria: <br>Requires JAMB ≥ 180 and Post-UTME ≥ 170.</p>
      <form action="#task22" method="post">
        <div class="row">
          <div><label for="jamb">JAMB score</label><input type="number" id="jamb" name="jamb" required></div>
          <div><label for="utme">Post-UTME score</label><input type="number" id="utme" name="utme" required></div>
        </div>
        <input type="submit" name="submit22" value="Check">
      </form>
      <?php
      if (isset($_POST['submit22'])) {
        $jamb = (int) $_POST['jamb'];
        $utme = (int) $_POST['utme'];

        if ($jamb >= 180 && $jamb <= 400 && $utme >= 170  && $utme <= 400) {
          echo "<div class='result'>" . "Congratulations, you have been admitted." . "</div>";
        } elseif ($jamb > 400 || $utme > 400) {
          echo "<div class='result'>" . "Enter a valid Score!" . "</div>";
        } else {
          echo "<div class='result'>" . "Sorry, try again next year." . "</div>";
        }
      }
      ?>
    </section>
    <section id="task23">
      <p class="eyebrow">Task 23</p>
      <h2>Discount Calculator</h2>
      <p class="desc">Write a program to simulate a discount calculator based on the amount
        spent.
        <br>20% off if money spent ≥ 1000, 10% off if money spent ≥ 500, otherwise no discount.
      </p>
      <form action="#task23" method="post">
        <label for="amount23">Amount spent</label>
        <input type="number" id="amount23" name="amount23" step="any" required>
        <input type="submit" name="submit23" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit23'])) {
        $amount23 = (float) $_POST['amount23'];
        if ($amount23 >= 1000) {
          $discount23 = 0.20 * $amount23;
        } elseif ($amount23 >= 500 && $amount23 < 1000) {
          $discount23 = 0.10 * $amount23;
        } else {
          $discount23 = 0;
          $final23 = $amount23 - $discount23;
          echo "<div class='result'>Discount: $" . $discount23 . "\nAmount to pay: $" . $final23 . "</div>";
        }
      }
      ?>
    </section>
    <section id="task24">
      <p class="eyebrow">Task 24</p>
      <h2>Greater of Two Numbers (Conditional Operator)</h2>
      <p class="desc"> Write a program to show the Greater among
        two numbers.
      </p>
      <form action="#task24" method="post">
        <div class="row">
          <div><label for="num1_24">First number</label><input type="number" id="num1_24" name="num1_24" step="any" required></div>
          <div><label for="num2_24">Second number</label><input type="number" id="num2_24" name="num2_24" step="any" required></div>
        </div>
        <input type="submit" name="submit24" value="Check">
      </form>
      <?php
      if (isset($_POST['submit24'])) {
        $Fnum = (float) $_POST['num1_24'];
        $Snum = (float) $_POST['num2_24'];

        if ($Fnum >  $Snum) {
          echo "<div class='result'>Greater number:{$Fnum} </div>";
        } else {
          echo "<div class='result'>Greater number:   {$Fnum}</div>";
        }
      }
      ?>
    </section>
    <section id="task25">
      <p class="eyebrow">Task 25</p>
      <h2>Even or Odd (Conditional Operator)</h2>
      <p class="desc"> Write a program to check whether the given number is even or odd (By using
        conditional operators).</p>
      <form action="#task25" method="post">
        <label for="num25">Enter a number</label>
        <input type="number" id="num25" name="num25" required>
        <input type="submit" name="submit25" value="Check">
      </form>
      <?php
      if (isset($_POST['submit25'])) {
        $num25 = (float) $_POST['num25'];

        if ($num25 % 2 === 0) {
          echo "<div class='result'>{$num25} is even.</div>";
        } else {
          echo "<div class='result'>{$num25} is odd.</div>";
        }
      }
      ?>
    </section>
    <section id="task26">
      <p class="eyebrow">Task 26</p>
      <h2>Largest of Three Numbers</h2>
      <p class="
      desc"> Write a program to print the largest of three numbers.
      </p>
      <form action="#task26" method="post">
        <div class="row">
          <div><label for="num1_26">First</label><input type="number" id="num1_26" name="num1_26" step="any" required></div>
          <div><label for="num2_26">Second</label><input type="number" id="num2_26" name="num2_26" step="any" required></div>
          <div><label for="num3_26">Third</label><input type="number" id="num3_26" name="num3_26" step="any" required></div>
        </div>
        <input type="submit" name="submit26" value="Check">
      </form>
      <?php
      if (isset($_POST['submit26'])) {
        $num1_26 = (float) $_POST['num1_26'];
        $num2_26 = (float) $_POST['num2_26'];
        $num3_26 = (float) $_POST['num3_26'];
        $largest26 = max($num1_26, $num2_26, $num3_26);
        echo "<div class='result'>Largest: {$largest26}</div>";
      }
      ?>
    </section>
    <section id="task27">
      <p class="eyebrow">Task 27</p>
      <h2>Percentage &amp; Grade (5 subjects)</h2>
      <p class="desc"> Write a program to calculate the percentage of a student in 5 subjects and
        then find his grade accordingly.<br> Percentage = (Maths + English +Physics + Chemistry + Economics / 500) * 100.</p>
      <form action="#task27" method="post">
        <div class="row">
          <div><label for="M27">Math</label><input type="number" id="M27" name="M27" required></div>
          <div><label for="E27">English</label><input type="number" id="E27" name="E27" required></div>
        </div>
        <div class="row">
          <div><label for="Ph27">Physics</label><input type="number" id="Ph27" name="Ph27" required></div>
          <div><label for="C27">Chemistry</label><input type="number" id="C27" name="C27" required></div>
        </div>
        <label for="EC27">Economics</label><input type="number" id="EC27" name="EC27" required>
        <input type="submit" name="submit27" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit27'])) {
        $M27 = (float) $_POST['M27'];
        $E27 = (float) $_POST['E27'];
        $Ph27 = (float) $_POST['Ph27'];
        $C27 = (float) $_POST['C27'];
        $EC27 = (float) $_POST['EC27'];
        if ($M27 > 100 || $M27 < 0 || $E27 > 100 || $E27 < 0 || $Ph27 > 100 || $Ph27 < 0 || $C27 > 100 || $C27 < 0 || $EC27 > 100 || $EC27 < 0) {
          echo "<div class='result'>Enter a valid percentage Score</div>";
        } else {
          $total27 = $M27 + $E27 + $Ph27 + $C27 + $EC27;
          $pct27 = ($total27 / 500) * 100;
          if ($pct27 >= 70) {
            $grade27 = 'A';
          } elseif ($pct27 >= 60) {
            $grade27 = 'B';
          } elseif ($pct27 >= 50) {
            $grade27 = 'C';
          } else {
            $grade27 = 'F';
          }
          $total27 = $M27 + $E27 + $Ph27 + $C27 + $EC27;
          $pct27 = ($total27 / 500) * 100;
          if ($pct27 >= 70) {
            $grade27 = 'A';
          } elseif ($pct27 >= 60) {
            $grade27 = 'B';
          } elseif ($pct27 >= 50) {
            $grade27 = 'C';
          } else {
            $grade27 = 'F';
          }
          echo "<div class='result'>Percentage: " . $pct27 . "%\nGrade: {$grade27}</div>";
        }
      }
      ?>
    </section>
    <section id="task28">
      <p class="eyebrow">Task 28</p>
      <h2>Gross Salary (Tiered)</h2>
      <p class="desc">&lt;1500: DA 90%, HRA 10%. ≥1500: DA 98%, HRA flat 500.</p>
      <form action="#task28" method="post">
        <label for="BS28">Basic Salary</label>
        <input type="number" id="BS28" name="BS28" step="any" required>
        <input type="submit" name="submit28" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit28'])) {
        $BS28 = (float) $_POST['BS28'];
        if ($BS28 < 1500) {
          $DA28 = 0.90 * $BS28;
          $HRA28 = 0.10 * $BS28;
        } else {
          $DA28 = 0.98 * $BS28;
          $HRA28 = 500;
        }
        $gross28 = $BS28 + $DA28 + $HRA28;
        echo "<div class='result'>DA: " . $DA28 . "\nHRA: " . $HRA28 . "\nGross Salary: " . $gross28 . "</div>";
      }
      ?>
    </section>
    <section id="task29">
      <p class="eyebrow">Task 29</p>
      <h2>Days of the Week (switch-case)</h2>
      <form action="#task29" method="post">
        <label for="dayNum29">Day number (1-7)</label>
        <input type="number" id="dayNum29" name="dayNum29" min="1" max="7" required>
        <input type="submit" name="submit29" value="Show">
      </form>
      <?php
      if (isset($_POST['submit29'])) {
        $dayNum29 = (int) $_POST['dayNum29'];
        switch ($dayNum29) {
          case 1:
            $dayName29 = "Monday";
            break;
          case 2:
            $dayName29 = "Tuesday";
            break;
          case 3:
            $dayName29 = "Wednesday";
            break;
          case 4:
            $dayName29 = "Thursday";
            break;
          case 5:
            $dayName29 = "Friday";
            break;
          case 6:
            $dayName29 = "Saturday";
            break;
          case 7:
            $dayName29 = "Sunday";
            break;
          default:
            $dayName29 = "Invalid day number";
        }
        echo "<div class='result'>{$dayName29}</div>";
      }
      ?>
    </section>
    <section id="task30">
      <p class="eyebrow">Task 30</p>
      <h2>Arithmetic Operations (switch-case)</h2>
      <form action="#task30" method="post">
        <div class="row">
          <div><label for="num1_30">First number</label><input type="number" id="num1_30" name="num1_30" step="any" required></div>
          <div><label for="num2_30">Second number</label><input type="number" id="num2_30" name="num2_30" step="any" required></div>
          <div>
            <label for="op30">Operation</label>
            <select id="op30" name="op30" required>
              <option value="add">Add</option>
              <option value="subtract">Subtract</option>
              <option value="multiply">Multiply</option>
              <option value="divide">Divide</option>
            </select>
          </div>
        </div>
        <input type="submit" name="submit30" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit30'])) {
        $num1_30 = (float) $_POST['num1_30'];
        $num2_30 = (float) $_POST['num2_30'];
        $op30 = $_POST['op30'];
        switch ($op30) {
          case 'add':
            $result30 = $num1_30 + $num2_30;
            break;
          case 'subtract':
            $result30 = $num1_30 - $num2_30;
            break;
          case 'multiply':
            $result30 = $num1_30 * $num2_30;
            break;
          case 'divide':
            $result30 =  $num1_30 / $num2_30;
            break;
          default:
            $result30 = "Invalid operation";
        }
        echo "<div class='result'>Result: {$result30}</div>";
      }
      ?>
    </section>
    <section id="task31">
      <p class="eyebrow">Task 31</p>
      <h2>Print a Message 10 Times</h2>
      <form action="#task31" method="post">
        <label for="msg31">Message</label>
        <input type="text" id="msg31" name="msg31" placeholder="Khalifa">
        <input type="submit" name="submit31" value="Print">
      </form>
      <?php
      if (isset($_POST['submit31'])) {
        $msg31 = trim($_POST['msg31']);
        if ($msg31 === '') $msg31 = 'Khalifa';
        $out31 = '';
        for ($i = 0; $i < 10; $i++) $out31 .= htmlspecialchars($msg31) . "\n";
        echo "<div class='result'>" . trim($out31) . "</div>";
      }
      ?>
    </section>
    <section id="task32">
      <p class="eyebrow">Task 32</p>
      <h2>First 10 Natural Numbers</h2>
      <?php
      $out32 = '';
      for ($i = 0; $i < 10; $i++) $out32 .= $i . " ";
      echo "<div class='result'>" . trim($out32) . "</div>";
      ?>
    </section>
    <section id="task33">
      <p class="eyebrow">Task 33</p>
      <h2>First N Natural Numbers &amp; Their Sum</h2>
      <form action="#task33" method="post">
        <label for="N33">Enter N</label>
        <input type="number" id="N33" name="N33" min="1" required>
        <input type="submit" name="submit33" value="Display">
      </form>
      <?php
      if (isset($_POST['submit33'])) {
        $N33 = (int) $_POST['N33'];
        $out33 = '';
        $sum33 = 0;
        for ($i = 1; $i <= $N33; $i++) {
          $out33 .= $i . " ";
          $sum33 += $i;
        }
        echo "<div class='result'>Numbers: " . trim($out33) . "\nSum: {$sum33}</div>";
      }
      ?>
    </section>
    <section id="task34">
      <p class="eyebrow">Task 34</p>
      <h2>Simple Interest for 3 Sets of P, N, R</h2>
      <form action="#task34" method="post">
        <div class="row">
          <div><label for="P34_1">P1</label><input type="number" id="P34_1" name="P34_1" step="any" required></div>
          <div><label for="N34_1">N1</label><input type="number" id="N34_1" name="N34_1" step="any" required></div>
          <div><label for="R34_1">R1</label><input type="number" id="R34_1" name="R34_1" step="any" required></div>
        </div>
        <div class="row">
          <div><label for="P34_2">P2</label><input type="number" id="P34_2" name="P34_2" step="any" required></div>
          <div><label for="N34_2">N2</label><input type="number" id="N34_2" name="N34_2" step="any" required></div>
          <div><label for="R34_2">R2</label><input type="number" id="R34_2" name="R34_2" step="any" required></div>
        </div>
        <div class="row">
          <div><label for="P34_3">P3</label><input type="number" id="P34_3" name="P34_3" step="any" required></div>
          <div><label for="N34_3">N3</label><input type="number" id="N34_3" name="N34_3" step="any" required></div>
          <div><label for="R34_3">R3</label><input type="number" id="R34_3" name="R34_3" step="any" required></div>
        </div>
        <input type="submit" name="submit34" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit34'])) {
        $out34 = '';
        for ($i = 1; $i <= 3; $i++) {
          $P34 =  $_POST["P34_{$i}"];
          $N34 = $_POST["N34_{$i}"];
          $R34 =  $_POST["R34_{$i}"];
          $si34 = $P34 * $N34 * $R34 / 100;
          $out34 .= "Set {$i}: SI = {$si34}\n";
        }
        echo "<div class='result'>" . trim($out34) . "</div>";
      }
      ?>
    </section>
    <section id="task35">
      <p class="eyebrow">Task 35</p>
      <h2>Number Series</h2>
      <?php
      $s1_35 = [];
      for ($i = 10; $i >= 1; $i--) $s1_35[] = $i;
      $s2_35 = [];
      for ($i = 2; $i <= 20; $i += 2) $s2_35[] = $i;
      $s3_35 = [];
      for ($i = 10; $i <= 20.5; $i += 3.5) $s3_35[] = $i;
      echo "<div class='result'>i.   " . implode(', ', $s1_35) . "\nii.  " . implode(', ', $s2_35) . "\niii. " . implode(', ', $s3_35) . "</div>";
      ?>
    </section>
    <section id="task36">
      <p class="eyebrow">Task 36</p>
      <h2>Factorial — For Loop &amp; While Loop</h2>
      <form action="#task36" method="post">
        <label for="num36">Enter a number</label>
        <input type="number" id="num36" name="num36" min="0" required>
        <input type="submit" name="submit36" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit36'])) {
        $num36 = (int) $_POST['num36'];
        $factFor36 = 1;
        for ($i = 1; $i <= $num36; $i++) $factFor36 *= $i;
        $factWhile36 = 1;
        $j36 = 1;
        while ($j36 <= $num36) {
          $factWhile36 *= $j36;
          $j36++;
        }
        echo "<div class='result'>Using for loop: {$num36}! = {$factFor36}\nUsing while loop: {$num36}! = {$factWhile36}</div>";
      }
      ?>
    </section>
    <section id="task37">
      <p class="eyebrow">Task 37</p>
      <h2>Series Sum: 1 + 1/4 + 1/7 + … + 1/25</h2>
      <?php
      $sum37 = 0;
      $terms37 = [];
      for ($i = 1; $i <= 25; $i += 3) {
        $sum37 += 1 / $i;
        $terms37[] = "1/{$i}";
      }
      echo "<div class='result'>" . implode(' + ', $terms37) . " = " . round($sum37, 4) . "</div>";
      ?>
    </section>
    <section id="task38">
      <p class="eyebrow">Task 38</p>
      <h2>Squares of First 10 Natural Numbers &amp; Their Sum</h2>
      <?php
      $out38 = [];
      $sum38 = 0;
      for ($i = 1; $i <= 10; $i++) {
        $sq38 = $i * $i;
        $out38[] = $sq38;
        $sum38 += $sq38;
      }
      echo "<div class='result'>Squares: " . implode(', ', $out38) . "\nSum: {$sum38}</div>";
      ?>
    </section>
    <section id="task39">
      <p class="eyebrow">Task 39</p>
      <h2>Product &amp; Average of First N Natural Numbers</h2>
      <form action="#task39" method="post">
        <label for="N39">Enter N</label>
        <input type="number" id="N39" name="N39" min="1" required>
        <input type="submit" name="submit39" value="Calculate">
      </form>
      <?php
      if (isset($_POST['submit39'])) {
        $N39 = (int) $_POST['N39'];
        $product39 = 1;
        $sum39 = 0;
        for ($i = 1; $i <= $N39; $i++) {
          $product39 *= $i;
          $sum39 += $i;
        }
        $avg39 = $sum39 / $N39;
        echo "<div class='result'>Product: {$product39}\nAverage: " . round($avg39, 2) . "</div>";
      }
      ?>
    </section>
    <section id="task40">
      <p class="eyebrow">Task 40</p>
      <h2>Even Numbers Out of First 100</h2>
      <?php
      $out40 = [];
      for ($i = 1; $i <= 100; $i++) if ($i % 2 === 0) $out40[] = $i;
      echo "<div class='result'>" . implode(', ', $out40) . "</div>";
      ?>
    </section>
    <section id="task41">
      <p class="eyebrow">Task 41</p>
      <h2>Fibonacci Series</h2>
      <form action="#task41" method="post">
        <label for="N41">How many terms?</label>
        <input type="number" id="N41" name="N41" min="1" required>
        <input type="submit" name="submit41" value="Generate">
      </form>
      <?php
      if (isset($_POST['submit41'])) {
        $N41 = (int) $_POST['N41'];
        $fib41 = [];
        $a41 = 0;
        $b41 = 1;
        for ($i = 0; $i < $N41; $i++) {
          $fib41[] = $a41;
          $next41 = $a41 + $b41;
          $a41 = $b41;
          $b41 = $next41;
        }
        echo "<div class='result'>" . implode(', ', $fib41) . "</div>";
      }
      ?>
    </section>
    <section id="task42">
      <p class="eyebrow">Task 42</p>
      <h2>Multiplication Table</h2>
      <form action="#task42" method="post">
        <label for="num42">Enter a number</label>
        <input type="number" id="num42" name="num42" step="any" required>
        <input type="submit" name="submit42" value="Show">
      </form>
      <?php
      if (isset($_POST['submit42'])) {
        $num42 = (float) $_POST['num42'];
        $out42 = '';
        for ($i = 1; $i <= 10; $i++) {
          $out42 .= "{$num42} x {$i} = " . ($num42 * $i) . "\n";
        }
        echo "<div class='result'>" . trim($out42) . "</div>";
      }
      ?>
    </section>
    <section id="task43">
      <p class="eyebrow">Task 43</p>
      <h2>Reverse a 3-Digit Number</h2>
      <form action="#task43" method="post">
        <label for="num43">Enter a 3-digit number</label>
        <input type="number" id="num43" name="num43" min="100" max="999" required>
        <input type="submit" name="submit43" value="Reverse">
      </form>
      <?php
      if (isset($_POST['submit43'])) {
        $num43 = (int) $_POST['num43'];
        $n43 = $num43;
        $reversed43 = 0;
        while ($n43 > 0) {
          $digit43 = $n43 % 10;
          $reversed43 = $reversed43 * 10 + $digit43;
          $n43 = intdiv($n43, 10);
        }
        echo "<div class='result'>Reversed: {$reversed43}</div>";
      }
      ?>
    </section>
    <section id="task44">
      <p class="eyebrow">Task 44</p>
      <h2>Palindrome Check</h2>
      <form action="#task44" method="post">
        <label for="num44">Enter a number</label>
        <input type="number" id="num44" name="num44" min="0" required>
        <input type="submit" name="submit44" value="Check">
      </form>
      <?php
      if (isset($_POST['submit44'])) {
        $num44 = (int) $_POST['num44'];
        $n44 = $num44;
        $reversed44 = 0;
        while ($n44 > 0) {
          $digit44 = $n44 % 10;
          $reversed44 = $reversed44 * 10 + $digit44;
          $n44 = intdiv($n44, 10);
        }
        echo "<div class='result'>" . ($reversed44 === $num44 ? "{$num44} is a palindrome." : "{$num44} is not a palindrome.") . "</div>";
      }
      ?>
    </section>
    <section id="task45">
      <p class="eyebrow">Task 45</p>
      <h2>Armstrong Number Check</h2>
      <p class="desc">A number equal to the sum of its own digits, each raised to the power of the number of digits.</p>
      <form action="#task45" method="post">
        <label for="num45">Enter a number</label>
        <input type="number" id="num45" name="num45" min="0" required>
        <input type="submit" name="submit45" value="Check">
      </form>
      <?php
      if (isset($_POST['submit45'])) {
        $num45 = (int) $_POST['num45'];
        $digits45 = str_split((string) $num45);
        $power45 = count($digits45);
        $sum45 = 0;
        foreach ($digits45 as $d45) $sum45 += (int) $d45 ** $power45;
        echo "<div class='result'>" . ($sum45 === $num45 ? "{$num45} is an Armstrong number." : "{$num45} is not an Armstrong number.") . "</div>";
      }
      ?>
    </section>
    <section id="task46">
      <p class="eyebrow">Task 46</p>
      <h2>Prime Numbers Out of First 100</h2>
      <?php
      function isPrime46($n)
      {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
          if ($n % $i === 0) return false;
        }
        return true;
      }
      $primes46 = [];
      for ($i = 1; $i <= 100; $i++) if (isPrime46($i)) $primes46[] = $i;
      echo "<div class='result'>" . implode(', ', $primes46) . "</div>";
      ?>
    </section>
    <section id="task47">
      <p class="eyebrow">Task 47</p>
      <h2>Number Patterns</h2>
      <?php
      $pattern1 = '';
      for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) $pattern1 .= $j . " ";
        $pattern1 .= "\n";
      }
      $pattern2 = '';
      for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) $pattern2 .= $i . " ";
        $pattern2 .= "\n";
      }
      $pattern3 = '';
      $count3 = 1;
      for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          $pattern3 .= $count3 . " ";
          $count3++;
        }
        $pattern3 .= "\n";
      }
      $pattern4 = '';
      $rows4 = 5;
      for ($i = 1; $i <= $rows4; $i++) {
        $pattern4 .= str_repeat("  ", $rows4 - $i);
        for ($j = 1; $j <= $i; $j++) $pattern4 .= $j . " ";
        for ($j = $i - 1; $j >= 1; $j--) $pattern4 .= $j . " ";
        $pattern4 .= "\n";
      }
      ?>
      <p class="desc">i.</p>
      <div class="result">
        <pre><?php echo $pattern1; ?></pre>
      </div>
      <p class="desc">ii.</p>
      <div class="result">
        <pre><?php echo $pattern2; ?></pre>
      </div>
      <p class="desc">iii.</p>
      <div class="result">
        <pre><?php echo $pattern3; ?></pre>
      </div>
      <p class="desc">iv.</p>
      <div class="result">
        <pre><?php echo $pattern4; ?></pre>
      </div>
    </section>

  </main>

  <script src="script.js"></script>

</body>

</html>