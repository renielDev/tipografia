@foreach($fonts as $font)
  <li>
    <div>
      <span><strong>{{ $font }}</strong> by {{ $author }}</span>
      <span>in <strong>Moods > {{ $moods }}</strong></span>
    </div>
    <div>
      <div class="row">
        <span class="col-md-9" style="font-family:{{ $font }}">{{ $font }}</span>
        <span class="col-md-3 text-right">
            @if($source!=='google')
              <button type="button" name="button" class="btn btn-default">Download</button>
            @endif
            <button type="button" name="button" class="btn btn-default">Select</button>
        </span>
        <span class="clear-both"></span>
      </div>
    </div>
  </li>
@endforeach
