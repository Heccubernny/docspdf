  <!-- More Information -->
  <div id="moreInformation" class="form-section step step-3">
      <label class="form-label" for="turnover">Forecasted Turnover for the Current Year (in €/mil):</label>
      <input class="form-input" type="text" id="turnover" name="turnover">
      <label class="form-label" for="market">Market:</label>
      <select class="form-input" id="market" name="market">
          <option value="Provincial">Provincial</option>
          <option value="Regional">Regional</option>
          <option value="National">National</option>
      </select>
      <!-- Market -->
      {{-- <label class="form-label">Market:</label>
<input type="checkbox" id="marketProvincial" name="market[]" value="Provincial" {{ in_array('Provincial', $data['market']) ? 'checked' : '' }}>
<label for="marketProvincial">Provincial</label>

<input type="checkbox" id="marketRegional" name="market[]" value="Regional" {{ in_array('Regional', $data['market']) ? 'checked' : '' }}>
<label for="marketRegional">Regional</label>

<input type="checkbox" id="marketNational" name="market[]" value="National" {{ in_array('National', $data['market']) ? 'checked' : '' }}>
<label for="marketNational">National</label> --}}

  </div>
  {{-- <button id="previous-button" onclick="previousStep(3, 2)">Previous</button> --}}
  {{-- <button id="next-button" onclick="nextStep(3, 4)">Next</button> --}}
