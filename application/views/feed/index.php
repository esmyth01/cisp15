<?php
//views/news/index.php
$this->load->view($this->config->item('theme') . 'header');
?>

<h2><?php echo $title ?></h2>

<?php


print '<h1>' . $feed->channel->title . '</h1>';//view
foreach($feed->channel->item as $story)
{
  echo '<a href="' . $story->link . '">' . $story->title . '</a><br />';
  echo '<p>' . $story->description . '</p><br /><br />';
}


//views/news/index.php
$this->load->view($this->config->item('theme') . 'header');
?>
