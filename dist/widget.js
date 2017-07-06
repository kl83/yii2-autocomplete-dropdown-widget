var autocomleteDropdownInit = function(elId, options, source, ajaxGlobal){
    var el = jQuery('#'+elId);
    var hiddenInput = el.find('input[type="hidden"]');
    var autocompleteInput = el.find('.autocomplete');
    var selectedItemLabel;
    options.select = function(e, ui){
        selectedItemLabel = ui.item.label;
        hiddenInput.val(ui.item.id);
    };
    options.source = function ( request, response ) {
        $.ajax({
            data: { "term": request.term },
            global: ajaxGlobal,
            type: 'GET',
            url: source,
            success: function ( items ) {
                return response(items);
            }
        });
    };
    autocompleteInput.autocomplete(options);
    autocompleteInput.change(function(){
        if ( selectedItemLabel !== jQuery(this).val() ) {
            hiddenInput.val(null);
        }
    });
};
