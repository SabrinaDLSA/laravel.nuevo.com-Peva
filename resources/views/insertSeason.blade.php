          <div class="" align="center">
              <h3>Adding a new Season</h3>
          </div>
            <fieldset>
              <legend align="center"></legend>
              <input type="text" name="Name" placeholder="Name" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                    You have to delete this in order to put another description
              </textarea>
              <br>
              {!! Form::select('Genre', [ '5' =>'Select a Genre'] + Config::get('enums.series_types'),null, ['class' => 'form-control'])  !!}
              <br>
              <input type="text" name="Start" placeholder="Start"  class="form-control">
              <br>
              <input type="text" name="Finish" placeholder="Finish"  class="form-control">
              <br>
              <input type="text" name="Seasons" placeholder="Seasons"  id="seasonsData" onkeydown="SeasonDown()" onkeyup="SeasonUp()" class="form-control">
              <br>
              <input type="text" name="Photo" placeholder="Put here your favourite picture"  class="form-control">
            </fieldset>
            <hr>
