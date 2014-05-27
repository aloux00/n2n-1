(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
         
        
        
        $(document).on("click", "#submit", function(evt)
        {
         activate_subpage("#mainsub"); 
        });
}
 $(document).ready(register_event_handlers);
})();
