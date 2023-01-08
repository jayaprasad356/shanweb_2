<fieldset>
    <div class="form-group">
        <label for="exampleInputEmail1">Electricity meter reading (Day) *</label>
          <input type="number" name="day_emr_price" value="<?php echo $res[0]['day_emr_price']?>" placeholder="Day EM Reading" class="form-control" required="required" id = "day_emr_price" >
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">Electricity meter reading (Night) *</label>
        <input type="number" name="night_emr_price" value="<?php echo $res[0]['night_emr_price']?>"  placeholder="Night EM Reading" class="form-control" required="required" id="night_emr_price">
    </div> 

    <div class="form-group">
        <label for="exampleInputEmail1">Gas meter reading (Day) *</label>
        <input type="number" name="day_gmr_price" value="<?php echo $res[0]['day_gmr_price']?>" placeholder="Gas Meter Reading" class="form-control" required="required" id="day_gmr_price">
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
