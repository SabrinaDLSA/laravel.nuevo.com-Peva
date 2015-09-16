
  Select a season to add (Some seasons might not appear, if you wish to edit them go to edit seasons, if
  they are not here it's because you already added them)
  <?php $Season = array('' =>'Please select a Season') + $Season;?>
{!! Form::select('Season', $Season, null , array('class' => 'form-control ser', 'onchange' => 'showEpisodes()') )!!}
