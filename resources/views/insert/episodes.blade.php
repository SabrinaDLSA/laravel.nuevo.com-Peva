Select an Episode to add (Some Episodes might not appear, if you wish to edit them go to edit Episode, if
they are not here it's because you already added them)
      <?php $Episodes = array('' =>'Please select an Episode') + $Episodes;?>
{!! Form::select('Episodes', $Episodes, null, array('class' => 'form-control ser', 'onchange' => 'showEpisode()')) !!}
