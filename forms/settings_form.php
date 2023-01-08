<fieldset>
    <div class="form-group">
        <label for="exampleInputEmail1">Electricity meter reading (Day) *</label>
          <input type="number" name="day_emr_price" value="<?php echo htmlspecialchars($edit ? $setting['day_emr_price'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Day EM Reading" class="form-control" required="required" id = "day_emr_price" >
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">Electricity meter reading (Night) *</label>
        <input type="number" name="night_emr_price" value="<?php echo stripslashes($edit ? $setting['night_emr_price'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Night EM Reading" class="form-control" required="required" id="night_emr_price">
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">Gas meter reading (Day) *</label>
        <input type="number" name="day_gmr_price" value="<?php echo xss_clean($edit ? $setting[0]['day_gmr_price'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Gas Meter Reading" class="form-control" required="required" id="day_gmr_price">
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
