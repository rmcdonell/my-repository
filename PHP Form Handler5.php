
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Form Example</title>
<style>
  #honeypot {
    display: none;
  }
</style>
</head>

<body>
  <h1>WDV341 Intro PHP</h1>
    <h2>WDV101 Intro HTML and CSS Chapter 9 - Creating Forms - Code Example</h2>
      <p><strong>Basic Form Handler</strong> - This process will display the 'name = value' pairs for all the elements of a form. This summary will on any number of form elements regardless of their name attribute value. </p>
      <p>Use <strong>basicFormExample.php</strong> in the action attribute of your form. </p>
      <p>Field '<strong>name</strong>' - The value of the name attribute from the HTML form element.</p>
      <p>Field <strong>'value</strong>' - The value entered in the field. This will vary depending upon the HTML form element.</p>
        <form id="form1" name="form1" method="post" action="formHandler.php">
          <input name="honeypot" type="text" id="honeypot"/>
          <p>First Name:
            <input type="text" name="firstName" id="firstName" />
        </p>
          <p>Last Name:
            <input type="text" name="lastName" id="lastName" />
          </p>
          <p>School:
            <input type="text" name="school" id="school" />
          </p>
          <p>First Time Student
            <input type="radio" value="FirstTimeStudent" name="confirm" id="firstTimeStudent" checked/>
            Returning Student
            <input type="radio" value="returningStudent" name="confirm" id="returningStudent" />
            Advanced Education
            <input type="radio" value="advancedEducation" name="confirm" id="advancedEducation" />
          </p>

          <p>
			   Associates Degree
            <input type="checkbox" name="associatesDegree" id="associatesDegree" />
          		Bachelors Degree
            <input type="checkbox" name="bachelors" id="bahcelors" />
          </p>
          <p>
			  Please choose interest (Choose one)
            <select name="study">
              <option value="wdv">Web Development</option>
              <option value="bis">Business Informations System</option>
              <option value="graphicDesign">Graphic Design</option>
            </select>
          </p>
            <input type="submit" name="button" id="button" value="Submit" />
            <input type="reset" name="button2" id="button2" value="Reset" />
          </p>
        </form>

<p>&nbsp;</p>
</body>

</html>
