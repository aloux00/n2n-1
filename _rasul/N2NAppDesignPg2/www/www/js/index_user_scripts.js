(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
         $(document).on("click", ".uib_w_81", function(evt)
        {
         activate_subpage("#singles_details"); 
        });
        $(document).on("click", ".uib_w_68", function(evt)
        {
         activate_subpage("#uib_page_2sub"); 
        });
        $(document).on("click", ".uib_w_93", function(evt)
        {
         activate_subpage("#uib_map"); 
        });
}
 $(document).ready(register_event_handlers);
})();
