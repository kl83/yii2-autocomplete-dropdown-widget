var autocomleteDropdownInit = function(elId){
    var el = jQuery('#'+elId);
    var hiddenInput = el.find('input[type="hidden"]');
    var autocompleteInput = el.find('.autocomplete');
    var options = el.data('autocomplete');
    var selectedItemLabel;
    options.select = function(e, ui){
        selectedItemLabel = ui.item.label;
        hiddenInput.val(ui.item.id);
    };
    autocompleteInput.autocomplete(options);
    autocompleteInput.change(function(){
        if ( selectedItemLabel !== jQuery(this).val() ) {
            hiddenInput.val(null);
        }
    });
};
