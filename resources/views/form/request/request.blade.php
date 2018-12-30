<div class="form-group">
  <input type="range" min="1" max="365" name="date" id="date"  onchange="document.getElementById('rangeValue').innerHTML = this.value;"
> <span id="rangeValue" style="color:red;">183</span>                                   
</div>

{{-- Form include --}}
@include('form.allElement')
<div class="form-group">
  <button class="btn color_but_blue" type="submit">Поиск</button>
</div>                                        
                                    

                                
                                 