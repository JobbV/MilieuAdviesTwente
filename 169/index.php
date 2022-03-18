<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>
<section class="py-60">
  <div class="container text-control-1">
    <h2>FAQ </h2>
    <div class="faqs-section">
      <div class="faq accordion">
        <div class="question-wrapper">
          <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
            <p class="question" title="">
               How many travellers make a Group?</p>
          </div><i class="material-icons drop">expand_more</i>
        </div>
        <div class="answer-wrapper">
          <p class="answer">Groups can start at as low as 8 people depending on the travel provider. Plus, there is no size limit or maximum number of passengers. The more, the merrier!</p>
        </div>
      </div>
      <div class="faq accordion">
        <div class="question-wrapper">
          <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
            <p class="question" title="">
               How much is a group discount?</p>
          </div><i class="material-icons drop">expand_more</i>
        </div>
        <div class="answer-wrapper">
          <p class="answer">Discounts vary depending on a number of factors, like the size of your group, duration of stay, special activities and more. Discuss your group travel requirements with your agent and they’ll be sure to find you all the discounts your group is eligible for.</p>
        </div>
      </div>
      <div class="faq accordion">
        <div class="question-wrapper">
          <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
            <p class="question" title="">What kinds of groups can travel together?</p>
          </div><i class="material-icons drop">expand_more</i>
        </div>
        <div class="answer-wrapper">
          <p class="answer">You name it! We has booked all kinds of group travel. We’re happy to arrange friends and family trips, destination weddings, group golf getaways, anniversaries and vow renewals, as well as get-togethers for clubs and other special interest groups.</p>
        </div>
      </div>
      <div class="faq accordion">
        <div class="question-wrapper">
          <div class="d-flex align-items-center"><span class="q-mark d-block">Q.</span>
            <p class="question" title="">
               Are there group travel benefits beyond discounted airfare and accommodation?</p>
          </div><i class="material-icons drop">expand_more</i>
        </div>
        <div class="answer-wrapper">
          <p class="answer">Yes! For starters, groups can take advantage of flexible payment options, often with lower deposits required to secure each booking. In addition to discounts up-front, your group may be eligible for complimentary passengers, and qualify for more flexible terms. Be sure to ask your agent for details! Ask your Travel Professional for details!</p>
        </div>
      </div>
    </div>
  </div>
</section>

    

<?php
include('functions.php');



// als het continent leeg is voer die de code hier onder uit
// als continent niet gevuld is pakt die de if 
if (empty($_GET["vragen"])) {

    toonAllevragen();
} 

// als het niet lukt gebruikt die de code hier onder 
// hier voert die een sql statement uit
// als continent wel gevuld is pakt die deze code
else 
{
$vragen = $_GET["vragen"];
<<<<<<< HEAD
   toonVragem($vragen);
=======
   toonVragen($vragen);
>>>>>>> c4f92f872ec8fc15c329ad7207f755e9c63cf9d9
}
    ?>
</body>
</html>