<fieldset>
    <div class="form-group">
        <label for="exampleInputEmail1">Electricity meter reading (Day) *</label>
          <input type="number" name="day_electricity_meter_reading" value="<?php echo htmlspecialchars($edit ? $setting['day_electricity_meter_reading'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Day EM Reading" class="form-control" required="required" id = "day_electricity_meter_reading" >
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">Electricity meter reading (Night) *</label>
        <input type="number" name="night_electricity_meter_reading" value="<?php echo stripslashes($edit ? $setting['night_electricity_meter_reading'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Night EM Reading" class="form-control" required="required" id="night_electricity_meter_reading">
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">Gas meter reading (Day) *</label>
        <input type="number" name="day_gas_meter_reading" value="<?php echo xss_clean($edit ? $setting[0]['day_gas_meter_reading'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Gas Meter Reading" class="form-control" required="required" id="day_gas_meter_reading">
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
