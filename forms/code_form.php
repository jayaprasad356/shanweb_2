<fieldset>
    <div class="form-group">
        <label for="f_name">Amount *</label>
          <input type="text" name="amount" value="<?php echo htmlspecialchars($edit ? $codes['amount'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Amount" class="form-control" required="required" id = "amount" >
    </div> 

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
