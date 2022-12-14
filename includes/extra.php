
<!-- menu -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    
<div class="topnav">
  <a class="active" href="index.php">Veeh</a>
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="contact">Contact</a>
  <a href="career">Career</a>
  <a href="partner">Partnership</a>
</div>

<style type="text/css">
  
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
  
</style>

  </title>
</head>
<body>
<h1>
  <!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="assets/images/img_woods_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="assets/images/img_5terre_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="assets/images/img_mountains_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="assets/images/img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="assets/images/img_nature_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="assets/images/img_snow_wide.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="assets/images/img_woods.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/images/img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>


<style type="text/css">
  

  * {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

<script type="text/javascript">
  
  let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</h1>
</body>
</html>




<!-- Learning tips -->

<main>
  <!-- used to increase SEO accessibility -->
</main>

he alt attribute's text in the image tag is used for screen readers to improve accessibility and is displayed if the image fails to load.
<img src="" alt="">
<a href="" target="_blank">
<!-- the blank attribute helps to open the link in a new tab-->

<form>
  <!-- it used to create a form -->
</form>


<section>
<!-- section element is used to element to separate a section of content from the future content. -->
</section>
<figure>
<!-- figure element represents self-contained content and will allow you to associate an image with a caption. -->
  <figcaption>
  <!-- figcaption element is used to add a caption to describe the image contained within the figure element--></figcaption> 
</figure>
<em>
  <!-- element is used to emphasize -->
</em>
<ol>
  <!-- items are numbured -->
</ol>
<ul>
  <!-- items are not numbured -->
</ul>
<strong>
  <!-- The strong element is used to indicate that some text is of strong importance or urgent. -->
</strong>
<form action="">
  <!-- The action attribute indicates where form data should be sent. For example, <form action="/submit-url"></form> tells the browser that the form data should be sent to the path /submit-url. -->
  <input type="" name="" placeholder="" required>
  <!-- The input element allows you several ways to collect data from a web form. Like img elements, input elements are self-closing and do not need closing tags. -->

  <!-- There are many kinds of inputs you can create using the type attribute. You can easily create a password field, reset button, or a control to let users select a file from their computer. -->

  <!-- In order for a form's data to be accessed by the location specified in the action attribute, you must give the text field a name attribute and assign it a value to represent the data being submitted. For example, you could use the following syntax for an email address text field: <input type="text" name="email">. -->
<!-- 
  Placeholder text is used to give people a hint about what kind of information to enter into an input. For example, <input type="text" placeholder="Email address">. -->
  <!-- To prevent a user from submitting your form when required information is missing, you need to add the required attribute to an input element. There's no need to set a value to the required attribute. Instead, just add the word required to the input element, making sure there is space between it and other attributes. -->
</form>

<button>
  <!-- Use the button element to create a clickable button. For example, <button>Click Here</button> creates a button with the text Click Here.
The default behavior of clicking a form button without any attributes submits the form to the location specified in the form's action attribute. -->
</button>
 <input type="radio" id="" name="">
 <!-- You can use radio buttons for questions where you want only one answer out of multiple options. -->
  <!-- The id attribute is used to identify specific HTML elements. Each id attribute's value must be unique from all other id values for the entire page.When elements have multiple attributes, the order of the attributes doesn't matter. -->
   <!-- To make it so selecting one radio button automatically deselects the other, both buttons must have a name attribute with the same value. -->
 <label>
   <!-- label elements are used to help associate the text for an input element with the input element itself (especially for assistive technologies like screen readers). For example, <label><input type="radio"> cat</label> makes it so clicking the word cat also selects the corresponding radio button -->
  
 </label>
 <fieldset>
   <!-- The fieldset element is used to group related inputs and labels together in a web form. fieldset elements are block-level elements, meaning that they appear on a new line. -->
 </fieldset>
<legend>
  <!-- The legend element acts as a caption for the content in the fieldset element. It gives users context about what they should enter into that part of the form. -->
</legend>
<meta charset="utf-8">
<!-- One more thing. You should allow people to use their native language. Tell the browser to encode multiple languages by adding a meta element as a child of the head element. Set its charset attribute to UTF-8. -->