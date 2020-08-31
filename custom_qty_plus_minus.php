 <script>
 var counter = function() {
      
        jQuery('.counter > .plus').unbind('click');
        jQuery('.counter > .minus').unbind('click');

        jQuery('.counter > .plus').bind('click', function(){
            var currentTxtbox = jQuery(this).parent().siblings('.txt-quantity');
            var currentValue = Number(currentTxtbox.val());
            currentValue++;
            currentTxtbox.val(currentValue);
        });

        jQuery('.counter > .minus').bind('click', function(){
            var currentTxtbox = jQuery(this).parent().siblings('.txt-quantity');
            var currentValue = Number(currentTxtbox.val());
            if (currentValue == 1)
                return false;
            currentValue--;
            currentTxtbox.val(currentValue);
        });
    }

counter();
<script>
<div class="custom_input-style">
					<label>Quantity</label>
					<input type="text" name="quantity" class="form-control input-sm txt-quantity required" value="1">
					<div class="counter">
						<span class="plus">+</span>
						<span class="minus">-</span>
					</div>
				</div>
