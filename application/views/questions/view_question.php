<?php //var_dump($question) ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php $this->load->view('admin/application/bootstrap') ?>
  <link rel="stylesheet" type="text/css" href="/assets/platform.css">
  <meta charset="utf-8">
  <title>Questions Detail</title>
</head>
<body>
<?php $this->load->view('header') ?>

<div class="container">
  <div class="container-fluid">
    <h1>Question from NGO</h1>
      <h2><?php echo $question['title']; ?></h2>
      <h4>Contact Person:<?php echo $question['name'] ?></h4>
      <h4>Contact info: <?php echo $question['contact_email'] ?></h4>
      <h4>Description:</h4>
      <p><?php echo $question['q_content'] ?></p>

      <h4>Attached Files:</h4>
      <img class="card-img-top" src="<?php echo $question['attachment'] ?>" alt="Card image cap">

      <h4>When needed: <?php echo $question['when_needed'] ?></h4>
      <div>
        <div>
        <h4>Answers</h4>
        <h4>Posted By: Engineer Alan Cook</h4>
        <h4>dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus variu</h4>
        </div>
        <div>
        <h4>Comments:</h4>
        <div>
        <h4>dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus variu</h4></div>
        </div>
      </div>






  </div>
</div>


</body>
</html>